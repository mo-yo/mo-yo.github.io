<?php

include "includes.php";
include "imadmintest.php";

// Redirect to a specific section
$redirect = Configuration::getControlPanel()->getRedirectFromArray($_GET);
if ($redirect) {
    header("Location: " . $redirect);
    exit(0);
}
// Otherwise attempt the login
Configuration::getControlPanel()->accessOrRedirect();

$main = Configuration::getControlPanel()->getMainTemplate();
$main->pagetitle = l10n("admin_dashboard", "Dashboard");
$main->stylesheets = array("css/dashboard.css");
$main->content = "";


// ----------
// Statistics
// ----------

if (isset($imSettings['analytics']) && $imSettings['analytics']['type'] == 'wsx5analytics') {
    $analytics = Configuration::getAnalytics();

    // Visitors Count
    $visitsPlotT = new Template("templates/dashboard/simple-plot.php");
    $visitsPlotT->title = l10n('admin_analytics_visitorscount', 'Visitors Count') . " - " . l10n("admin_lastdays", "Last 7 days");
    $visitsPlotT->type = "line";
    $visitsPlotT->colorIndex = 0;
    $visitsPlotT->data = $analytics->getTotalSiteVisitors(date("Y-m-d H:i:s", strtotime("-7 days")), date("Y-m-d H:i:s"));

    // Views count
    $viewsPlotT = new Template("templates/dashboard/simple-plot.php");
    $viewsPlotT->title = l10n('admin_analytics_pageviews', 'Page Views') . " - " . l10n("admin_lastdays", "Last 7 days");
    $viewsPlotT->type = "line";
    $viewsPlotT->colorIndex = 1;
    $viewsPlotT->data = $analytics->getPageViews(date("Y-m-d H:i:s", strtotime("-7 days")), date("Y-m-d H:i:s"));

    // Main render
    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("admin_analytics_title", "Statistics");
    $boxT->url = "analytics.php";
    $boxT->content = $visitsPlotT->render();
    $boxT->content .= $viewsPlotT->render();
    $boxT->image = "images/analytics_black.png";
    $main->content .= $boxT->render();
}



// ---------------
// E-Commerce Cart
// ---------------
$countComments = 0;
if (isset($imSettings['ecommerce']) && isset($imSettings['ecommerce']['database'])) {
    $ecommerce = Configuration::getCart();
    // Clean the temp files
    $ecommerce->deleteTemporaryFiles("../");

    // Main render
    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("admin_cart_title", "E-Commerce: Cart");
    $boxT->url = "cart-orders.php";
    $boxT->content = "";
    $boxT->image = "images/shop_black.png";

    if ($ecommerce->isDbConnected()) { // Connection check
        // Sales count
        $ordersPlotT = new Template("templates/dashboard/simple-plot.php");
        $ordersPlotT->title = l10n('cart_plot_sales', 'Sales') . " - " . l10n("admin_lastdays", "Last 7 days");
        $ordersPlotT->type = "line";
        $ordersPlotT->colorIndex = 2;
        $ordersPlotT->data = $ecommerce->getOrdersCountByDate(date("Y-m-d", strtotime("-7 days")) . " 00:00:01", date("Y-m-d") . " 23:59:59");
        $boxT->content .= $ordersPlotT->render();

        // Inbox count
        $rowT = new Template("templates/dashboard/summary-row.php");
        $rowT->icon = "fa-cart-plus";
        $rowT->iconColoredClass = "background-color-4";
        $rowT->iconEmptyClass = "background-mute";
        $rowT->value = $ecommerce->getOrdersCountByStatus('inbox');
        $rowT->url = "cart-orders.php?status=inbox";
        $rowT->caption = l10n('cart_inbox', 'Inbox');
        $rowT->margin = true;
        $boxT->bottom = $rowT->render();

        // On hold count
        $rowT = new Template("templates/dashboard/summary-row.php");
        $rowT->icon = "fa-hourglass";
        $rowT->iconColoredClass = "background-color-3";
        $rowT->iconEmptyClass = "background-mute";
        $rowT->value = $ecommerce->getOrdersCountByStatus('waiting');
        $rowT->url = "cart-orders.php?status=waiting";
        $rowT->caption = l10n('cart_waiting', 'On hold');
        $boxT->bottom .= $rowT->render();

        // Low stock
        $rowT = new Template("templates/dashboard/summary-row.php");
        $rowT->icon = "fa-exclamation-triangle";
        $rowT->iconColoredClass = "background-color-2";
        $rowT->iconEmptyClass = "background-mute";
        $rowT->value = count($ecommerce->getDynamicProductsAlertStatus());
        $rowT->url = "cart-availability.php";
        $rowT->caption = l10n('cart_lowstock', 'Low Stock');
        $boxT->bottom .= $rowT->render();

        if ($ecommerce->getCommentsData()['enabled'] &&  $ecommerce->getCommentsData()['type'] == 'websitex5') { 
            // Comments Last 7 days
            $param = array("from" => date("Y-m-d", strtotime("-7 days")) . " 00:00:01", "to" => date("Y-m-d") . " 23:59:59");
            $cartComments = $ecommerce->getComments($param);
            foreach ($cartComments as $productId => $productCommentsData) {
                $countComments += count($productCommentsData['comments']);
            }
            $rowT = new Template("templates/dashboard/summary-row.php");
            $rowT->icon = "fa-comment";
            $rowT->iconColoredClass = "background-color-6";
            $rowT->iconEmptyClass = "background-mute";
            $rowT->value = $countComments;
            $rowT->caption = ucfirst(l10n('blog_comments', 'Comments')) . " - " . l10n("admin_lastdays", "Last 7 days");
            $rowT->url = "cart-comments.php";
            $boxT->bottom .= $rowT->render();
        }

    } else {
        // Connection Error
        $boxT->content .= "DB Connection error";
    }
    $main->content .= $boxT->render();
}



// -------------------
// E-Commerce Comments
// -------------------

function sortCommentsByDate($a, $b) {
	if ($a["timestamp"] == $b["timestamp"]) return 0;
    return ($a["timestamp"] > $b["timestamp"]) ? -1 : 1;
}

$ecommerce = Configuration::getCart();
if (isset($ecommerce) && $ecommerce->getCommentsData()['enabled'] &&  $ecommerce->getCommentsData()['type'] == 'websitex5') {
    // Comments Last 7 days
    $param = array("from" => date("Y-m-d", strtotime("-7 days")) . " 00:00:01", "to" => date("Y-m-d") . " 23:59:59");
    $cartComments = $ecommerce->getComments($param);

    // Main render
    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("admin_cart_comments_title", "E-Commerce: Comments");
    $boxT->url = "cart-comments.php";
    $boxT->content = "";
    $boxT->image = "images/guestbook_black.png";

    // Summary
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-comment";
    $rowT->iconColoredClass = "background-color-6";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = $countComments;
    $rowT->caption = ucfirst(l10n('blog_comments', 'Comments')) . " - " . l10n("admin_lastdays", "Last 7 days");
    $boxT->content .= $rowT->render();

    // Latest comments
    $totalComments = array();
    $commentT = new Template("templates/dashboard/comment-row.php");
    foreach ($cartComments as $productId => $productCommentsData) {
        $prod = $ecommerce->getProductsData($productId);
        foreach ($productCommentsData['comments'] as $c) {
            $comment = array();
            $comment['name'] = $c['name'];
            $comment['body'] = $c['text'];
            $comment['title'] = $prod[$productId]["name"];
            $comment['timestamp'] = $c['publishDate'];
            $comment['url'] = "cart-comments.php?category=" . $prod[$productId]["categoryPath"][0] . "&product=" . $productId;
            $totalComments[] = $comment;
        }
    }
    if(count($totalComments)) {
        usort($totalComments, "sortCommentsByDate");
        $countTotalComments = count($totalComments);
        for ($i = 0; $i < $countTotalComments && $i < 3; $i++) {
            $commentT->name = $totalComments[$i]['name'];
            $commentT->body = $totalComments[$i]['body'];
            $commentT->title = $totalComments[$i]["title"];
            $commentT->timestamp = $totalComments[$i]['timestamp'];
            $commentT->url = $totalComments[$i]["url"];
            $boxT->content .= $commentT->render();
        }
    }

    // Count of messages to be validated
    $allCartComments = $ecommerce->getComments();
    $toApprove = 0;
    foreach ($allCartComments as $productId => $productCommentsData) {
        foreach ($productCommentsData['comments'] as $c) {
            if(!$c['approved']){
                $toApprove++;
            }
        }
    }
    //Show messages to be validated
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-exclamation-triangle";
    $rowT->iconColoredClass = "background-color-3";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = $toApprove;
    $rowT->caption = ucfirst(l10n("blog_waiting_approval", "Waiting for approval"));
    $boxT->bottom = $rowT->render();

    $main->content .= $boxT->render();
}



// ---------------
// Blog
// ---------------

if (isset($imSettings['blog']) && $imSettings['blog']['comments_source'] == 'wsx5') {
    $blog = Configuration::getBlog();
    $comments = $blog->getComments(date("Y-m-d", strtotime("-7 days")) . " 00:00:01", date("Y-m-d") . " 23:59:59", true);

    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("blog_title", "Blog");
    $boxT->url = "blog.php";
    $boxT->content = "";
    $boxT->image = "images/blog_black.png";

    // Summary
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-comment";
    $rowT->iconColoredClass = "background-color-6";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = count($comments);
    $rowT->caption = ucfirst(l10n('blog_comments', 'Comments')) . " - " . l10n("admin_lastdays", "Last 7 days");
    $boxT->content .= $rowT->render();

    // Latest comments
    $commentT = new Template("templates/dashboard/comment-row.php");
    for ($i = 0; $i < count($comments) && $i < 3; $i++) {
        $commentT->name = $comments[$i]['name'];
        $commentT->body = $comments[$i]['body'];
        $commentT->title = $comments[$i]['title'];
        $commentT->timestamp = $comments[$i]['timestamp'];
        $commentT->url = "blog.php?category=" . $comments[$i]['category'] . "&post=" . $comments[$i]['postid'];
        $boxT->content .= $commentT->render();
    }

    // Count of messages to be validated
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-exclamation-triangle";
    $rowT->iconColoredClass = "background-color-3";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = count($blog->getCommentsToValidate("", ""));
    $rowT->caption = ucfirst(l10n("blog_waiting_approval", "Waiting for approval"));
    $boxT->bottom = $rowT->render();

    $main->content .= $boxT->render();
}



// -----------------
// Access Management
// -----------------

if (isset($imSettings['access']['entrancepage'])) {
    $access = Configuration::getPrivateArea();
    $users = $access->getUsersById(array(), date("Y-m-d", strtotime("-7 days")) . " 00:00:01", date("Y-m-d") . " 23:59:59");

    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("private_area_title", "Access Management");
    $boxT->url = "privatearea.php";
    $boxT->content = "";
    $boxT->image = "images/access_black.png";

    // Summary
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-user background-color-6";
    $rowT->iconColoredClass = "background-color-3";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = count($users);
    $rowT->caption = ucfirst(l10n('private_area_registrations', 'Registrations')) . " - " . l10n("admin_lastdays", "Last 7 days");
    $boxT->content .= $rowT->render();

    // Last three users registered
    $userT = new Template("templates/dashboard/user-row.php");
    for ($i = 0; $i < count($users) && $i < 3; $i++) {
        $userT->name = $users[$i]["realname"];
        $userT->timestamp = $users[$i]["ts"];
        $userT->ip = $users[$i]["ip"];
        $boxT->content .= $userT->render();
    }

    // Users waiting for validation
    $notValidatedCount = 0;
    foreach($users as $user) {
        if (!$user['validated']) {
            $notValidatedCount++;
        }
    }
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-exclamation-triangle";
    $rowT->iconColoredClass = "background-color-3";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = $notValidatedCount;
    $rowT->caption = ucfirst(l10n("private_area_status_not_validated", "Not validated"));
    $boxT->bottom = $rowT->render();

    $main->content .= $boxT->render();
}



// -----------------
// Guestbook
// -----------------

if (count($imSettings['guestbooks']) > 0) {
    $validatedComments = ImGuestbook::getAllComments(date("Y-m-d", strtotime("-7 days")) . " 00:00:01", date("Y-m-d") . " 23:59:59", true);
    $waitingComments = ImGuestbook::getAllComments("", "", false);

    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("admin_guestbook", "Comments and Ratings");
    $boxT->url = "guestbook.php";
    $boxT->content = "";
    $boxT->image = "images/guestbook_black.png";

    // Summary
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-comment";
    $rowT->iconColoredClass = "background-color-6";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = count($validatedComments);
    $rowT->caption = ucfirst(l10n('guestbook_messages', 'Messages')) . " - " . l10n("admin_lastdays", "Last 7 days");
    $boxT->content .= $rowT->render();

    // Latest comments
    $commentT = new Template("templates/dashboard/comment-row.php");
    for ($i = 0; $i < count($validatedComments) && $i < 3; $i++) {
        $commentT->name = $validatedComments[$i]['name'];
        $commentT->body = $validatedComments[$i]['body'];
        $commentT->title = $validatedComments[$i]['title'];
        $commentT->timestamp = $validatedComments[$i]['timestamp'];
        $commentT->url = "guestbook.php?id=" . $validatedComments[$i]['topicid'];
        $boxT->content .= $commentT->render();
    }

    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-exclamation-triangle";
    $rowT->iconColoredClass = "background-color-3";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = count($waitingComments);
    $rowT->caption = ucfirst(l10n("blog_waiting_approval", "Waiting for approval"));
    $boxT->bottom = $rowT->render();

    $main->content .= $boxT->render();
}


// -----------------
// Tests
// -----------------

// Results list
$results = imAdminTest::testWsx5Configuration();
$list = "";
$count = 0;
$testT = new Template("templates/dashboard/test-row.php");
foreach ($results as $result) {
    if (!$result['success']) {
        $count++;
        $testT->name = $result['name'];
        $list .= $testT->render();
    }
}

if ($count > 0) {
    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("admin_test_title", "Website Test");
    $boxT->url = "sitetest.php";
    $boxT->content = "";
    $boxT->image = "images/test_black.png";

    // Summary
    $rowT = new Template("templates/dashboard/summary-row.php");
    $rowT->icon = "fa-exclamation-triangle";
    $rowT->iconColoredClass = "background-color-3";
    $rowT->iconEmptyClass = "background-mute";
    $rowT->value = $count;
    $rowT->caption = ucfirst(l10n("admin_test_notpassed", "Not passed"));
    $boxT->content .= $rowT->render();

    // Errors list
    $boxT->content .= $list;

    $main->content .= $boxT->render();
}

// -----------------
// WSX5 Manager Ads
// -----------------

if (Configuration::getControlPanel()->isWsx5Manager() == false) {
    $boxT = new Template("templates/dashboard/box.php");
    $boxT->title = l10n("wsx5manager_title", "WebSite X5 Manager");
    $boxT->url = "wsx5-manager.php";
    $boxT->content = "";
    $boxT->dismissid = "manager-ads";
    $boxT->image = "images/manager_black.png";

    $contentT = new Template("templates/dashboard/manager-ads.php");
    $boxT->content = $contentT->render();

    $main->content .= $boxT->render();
}

// ----------------------
// Optional Objects boxes
// ----------------------

$settings = Configuration::getSettings();
$boxT = new Template("templates/dashboard/box.php");

foreach ($settings['admin']['extra-dashboard'] as $key => $item) {
    $boxT->title = $item['title'];
    $boxT->image = "../" . $item['icon'];
    // Contents
    ob_start();
    include("../" . $item['path']);
    $boxT->content = ob_get_contents();
    ob_end_clean();
    // Append the box to the main template
    $main->content .= $boxT->render();
}

echo $main->render();
