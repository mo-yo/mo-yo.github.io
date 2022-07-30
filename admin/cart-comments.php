<?php

include "includes.php";

Configuration::getControlPanel()->accessOrRedirect();

function showSummary($contentT, $topic, $data) {
    // Show the summary
	$rating = $topic->getRating();
	$ratingT = new Template("templates/comments/summary.php");
	$ratingT->vote = $rating["rating"];
	$ratingT->count = $rating["count"];
	$ratingT->hasRating = $data['comment_type'] != "comment";
	$contentT->content .= $ratingT->render();
}

function loadTopic($topic, $data, $posturl) {
    $topic->setPostUrl($posturl);
    $topic->loadDb(ImDb::from_db_data(getDbData($data["db"])), $data["table"]);

	// Take care of the actions
	if (isset($_GET['disable'])) {
        $n = (int)$_GET['disable'];
        $c = $topic->comments->get($n);
        if (count($c) != 0) {
            $c['approved'] = "0";
            $topic->comments->edit($n, $c);
            $topic->save();
        }
    }

    if (isset($_GET['enable'])) {
        $n = (int)$_GET['enable'];
        $c = $topic->comments->get($n);
        if (count($c) != 0) {
            $c['approved'] = "1";
            $topic->comments->edit($n, $c);
            $topic->save();
        }
    }

    if (isset($_GET['delete'])) {
        $topic->comments->delete((int)$_GET['delete']);
        $topic->save();
    }

    if (isset($_GET['unabuse'])) {
        $n = (int)$_GET['unabuse'];
        $c = $topic->comments->get($n);
        if (count($c)) {
            $c['abuse'] = "0";
            $topic->comments->edit($n, $c);
            $topic->save();
        }
    }

    if (isset($_GET['disable']) || isset($_GET['enable']) || isset($_GET['delete']) || isset($_GET['unabuse'])) {
        echo "<script>window.location.href='" . $posturl . "';</script>\n";
        exit();
    }
    return $topic;
}

function sortCommentsByDate($a, $b) {
	if ($a["timestamp"] == $b["timestamp"]) return 0;
    return ($a["timestamp"] > $b["timestamp"]) ? -1 : 1;
}

// Load the cart
$ecommerce = Configuration::getCart();
$category = isset($_GET['category']) ? $_GET['category'] : "";
$product = isset($_GET['product']) ? $_GET['product'] : "";

$roots = array();
$products = array();
foreach ($ecommerce->getCategoriesTree() as $catId => $cat) {
    if ($cat['containsProductsWithProductPage']) {
        $roots[] = $cat;
        if (!isset($_GET['category']) || $catId == $_GET['category']) {
            $products = array_merge($products, getProducts($cat, '', $cat['name']));
        }
    }
}

function getProducts($cat, $prefix, $catPath) {
    $products = array();
    foreach ($cat['products'] as $prodId) {
        $prod = Configuration::getCart()->getProductsData($prodId)[$prodId];
        if ($prod['productPageLinkType'] == 'productpage') {
            $products[] = array_merge($prod, array(
                'label' => $prefix . $prod['name'],
                'categoryStringPath' => $catPath)
            );
        }
    }
    foreach ($cat['categories'] as $idSubCat => $subCat) {
        if ($subCat['containsProductsWithProductPage']) {
            $products = array_merge($products, getProducts($subCat, $prefix . $subCat['name'] . ' | ', $catPath . ' | ' . $subCat['name']));
        }
    }
    return $products;
}

// Load the main template
$mainT = Configuration::getControlPanel()->getMainTemplate();
$mainT->pagetitle = l10n("admin_cart_comments_title", "E-Commerce: Comments");
$mainT->stylesheets = array("css/comments.css");
$mainT->content = "";
$contentT = new Template("templates/common/box.php");
$contentT->cssClass = "cart-comments comments";
$contentT->content = "";

// Show the category and post selectors
$selectorsT = new Template("templates/cartcomments/selectors.php");
$selectorsT->categories = $roots;
$selectorsT->selectedCategory = @$_GET['category'];
$selectorsT->products = $products;
$selectorsT->data = $ecommerce;
if (isset($_GET['category'])) {
	$selectorsT->selectedProduct = $product;
}
$contentT->content .= $selectorsT->render();


//load new template of comments
$commentsT = new Template("templates/cartcomments/comments.php");
$commentsT->comments = [];
$commentsT->siteUrl = $imSettings['general']['url'];
$commentsT->baseposturlcategory = 'cart-comments.php?category=';
$commentsT->baseposturlproduct = '&product=';
$commentsT->showObjectTitle = false;
$commentsT->rating = "";
$totalComments = [];

$topic = false;

if ($category != "" && $product != "") {
	$topic = new ImTopic($ecommerce->getCommentsData()["prefix"] . $product, "", "../");
	$posturl = $commentsT->baseposturlcategory . $category . $commentsT->baseposturlproduct . $product;
    $topic = loadTopic($topic, $ecommerce->getCommentsData(), $posturl);

	showSummary($contentT, $topic, $ecommerce->getCommentsData());
	if ($topic->hasComments()) {
		// Show the comments
		$commentsT->comments = $topic->comments->comments;
        for ($i = 0, $size = count($topic->comments->comments); $i < $size; $i++) {
            $topic->comments->comments[$i]["idCategory"] = $category;
			$topic->comments->comments[$i]["category"] = $category;
			$topic->comments->comments[$i]["product"] = $product;
		}
		$totalComments = array_merge($totalComments, $topic->comments->comments);
		
		if(count($totalComments)) {
			usort($totalComments, "sortCommentsByDate");
			$commentsT->comments = $totalComments;
			$contentT->content .= $commentsT->render();
		}
	}
}
else  {
	//show all objects
	$commentsT->showObjectTitle = true;
	foreach ($products as $prod) {
        $topic = new ImTopic($ecommerce->getCommentsData()["prefix"] . $prod["id"], "", "../");
        $posturl = $commentsT->baseposturlcategory . $prod["categoryPath"][0] . $commentsT->baseposturlproduct . $prod["id"];
        $topic = loadTopic($topic, $ecommerce->getCommentsData(), $posturl);

        if ($topic->hasComments()) {
            foreach ($topic->comments->comments as $cm) {
                $cm["idCategory"] = $prod["categoryPath"][0];
                $cm["title"] = $prod["name"];
                $cm["category"] = $prod["categoryStringPath"];
                $cm["product"] = $prod["id"];
                $totalComments[] = $cm;
            }
        }
	}
	if(count($totalComments)) {
		usort($totalComments, "sortCommentsByDate");
		$commentsT->comments = $totalComments;
		$contentT->content .= $commentsT->render();
	}
    else{
        $ratingT = new Template("templates/comments/summary.php");
        $ratingT->vote = 0;
        $ratingT->count = 0;
        $ratingT->hasRating = false;
        $contentT->content .= $ratingT->render();
    }
}

$mainT->content = $contentT->render();
echo $mainT->render();
