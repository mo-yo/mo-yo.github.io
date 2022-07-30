<?php require_once("../res/x5engine.php"); ?>
<?php
$blog = new imBlog();
$data = $blog->parseUrlArray(@$_GET);
if (!$data['valid']) {
	header('Location: index.php', true, 302);
}
?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
	<head>
		<title><?php echo $blog->pageTitle('Лучший блог в мире', ' - '); ?></title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Михаил Кутузов" />
		<meta name="description" content="<?php echo $blog->pageDescription(); ?>" />
		<meta name="keywords" content="<?php echo $blog->pageKeywords(); ?>" />
		<meta property="og:locale" content="ru" />
<?php if (isset($data['id'])) { echo $blog->getOpengraphTags($data['id'], "\t\t"); } ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="../style/reset.css?2022-2-6-0" media="screen,print" />
		<link rel="stylesheet" href="../style/print.css?2022-2-6-0" media="print" />
		<link rel="stylesheet" href="../style/style.css?2022-2-6-0" media="screen,print" />
		<link rel="stylesheet" href="../style/template.css?2022-2-6-0" media="screen" />
		
		<link rel="stylesheet" href="../pluginAppObj/imFooter_pluginAppObj_05/custom.css" media="screen, print" />
		<link rel="stylesheet" href="../blog/style.css?2022-2-6-0-637947973875805042" media="screen,print" />
		<script src="../res/jquery.js?2022-2-6-0"></script>
		<script src="../res/x5engine.js?2022-2-6-0" data-files-version="2022-2-6-0"></script>
		
		<script src="../pluginAppObj/imFooter_pluginAppObj_05/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','Возможно, Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','[1]Обновите Ваш браузер[/1] или [2]продолжите процедуру [/2].','http://outdatedbrowser.com/'); };
			x5engine.settings.currentPath = '../';
			x5engine.utils.currentPagePath = 'blog/index.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="../favicon.png?2022-2-6-0-637947973875634361" type="image/png" />
		<link rel="alternate" type="application/rss+xml" title="Лучший блог в мире" href="../blog/x5feed.php" />
<?php
$blogBaseUrl = $imSettings['general']['url'] . 'blog';
$urlData = $blog->parseUrlArray(@$_GET);
$numPosts = $blog->getPostsCount();
$pagStart = array_key_exists("start", $urlData) ? $urlData['start'] : 0;
$pagLength = $imSettings['blog']['home_posts_number'];
$isPostPage = false;
if (array_key_exists('slug', $urlData)) {
	$isPostPage = true;
	$href = $blogBaseUrl . '/?' . $urlData['slug'];
}
else if (array_key_exists('id', $urlData)) {
	$isPostPage = true;
	$href = $blogBaseUrl . '/' . $blog->getSlugUrl($urlData['id']);
}
else if (array_key_exists('category', $urlData)) {
	$category = $blog->getUnescapedCategory($urlData['category']);
	if ($category !== NULL) {
		$href = $blogBaseUrl . '/?category=' . urlencode(str_replace(' ', '_', $category));
	}
}
else if (array_key_exists('author', $urlData)) {
	$author = $blog->getUnescapedAuthor($urlData['author']);
	if ($author !== NULL) {
		$href = $blogBaseUrl . '/?author=' . urlencode(str_replace(' ', '_', $author));
	}
}
else if (array_key_exists('tag', $urlData)) {
	$href = $blogBaseUrl . '/?tag=' . urlencode($urlData['tag']);
}
else if (array_key_exists('month', $urlData)) {
	$href = $blogBaseUrl . '/?month=' . urlencode($urlData['month']);
}
else {
	$href = $blogBaseUrl;
}
if ($isPostPage || $pagStart == 0) {
	echo '<link rel="canonical" href="'. $href. '"/>' . PHP_EOL;
}
if (!$isPostPage && $numPosts > $pagLength) {
	if ($pagStart - $pagLength >= 0) {
		$prev = 'start=' . ($pagStart - $pagLength) . '&length=' . $pagLength;
		$prev = ($href == $blogBaseUrl) ? '?' . $prev : '&' . $prev;
		echo '<link rel="prev" href="' . $href . $prev . '"/>' . PHP_EOL;
	}
	if ($pagStart + $pagLength < $numPosts) {
		$next = 'start=' . ($pagStart + $pagLength) . '&length=' . $pagLength;
		$next = ($href == $blogBaseUrl) ? '?' . $next : '&' . $next;
		echo '<link rel="next" href="' . $href . $next . '"/>' . PHP_EOL;
	}
}
if (isset($data['id']) && strlen($blog->getSlugUrl(@$data['id']))) {
	echo "\t\t<link rel=\"amphtml\" href=\"../blog/amp/" . $blog->getSlugUrl(@$data['id']) . "\"/>" . PHP_EOL;
}
$rich_data_string = $blog->getRichDataType();
if (!is_null($rich_data_string)) {
	echo '		<script type="application/ld+json">
' . $rich_data_string . '
		</script>
';
}
?>
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						
						<div id="imHeaderObjects"><div id="imHeader_imObjectSearch_02_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectSearch_02"><form id="imHeader_imObjectSearch_02_form" action="../imsearch.php" method="get"><fieldset><input type="text" id="imHeader_imObjectSearch_02_field" name="search" value="" /><button id="imHeader_imObjectSearch_02_button">Поиск</button></fieldset></form><script>$('#imHeader_imObjectSearch_02_button').click(function() { $(this).prop('disabled', true); setTimeout(function(){ $('#imHeader_imObjectSearch_02_button').prop('disabled', false);}, 900); $('#imHeader_imObjectSearch_02_form').submit(); return false; });</script></div></div><div id="imHeader_pluginAppObj_05_wrapper" class="template-object-wrapper"><!-- Cart Status v.5 --><div id="imHeader_pluginAppObj_05">
    <span style="color: rgba(255, 255, 255, 1);font-family: Open Sans;font-size: 20pt;font-weight: normal;font-style: normal;" class="widget_amount_total"></span>
    </div></div><div id="imHeader_imTextObject_08_wrapper" class="template-object-wrapper"><div id="imHeader_imTextObject_08">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imHeader_imTextObject_08_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<span class="fs12 cf1">This website will become your playground</span>
		</div>
	</div>

</div>
</div><div id="imHeader_imMenuObject_10_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_10"><div id="imHeader_imMenuObject_10_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.html">
Главная		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">Shop</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/sports.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../sports.html">
Sports		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/running.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../running.html">
Running		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/cycling.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../cycling.html">
Cycling		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/camping.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../camping.html">
Camping		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/sale.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../sale.html">
SALE		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/gift-card.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../gift-card.html">
Gift Card		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnMiddle imLevel" data-link-paths=",/blog/index.php,/blog/" data-link-hash="-1004219381"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../blog/index.php" class="label" onclick="return x5engine.utils.location('../blog/index.php', null, false)">Blog</a></div></div></li><li class="imMnMnMiddle imLevel" data-link-paths=",/about.html" data-link-hash="-1004210789"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../about.html" class="label" onclick="return x5engine.utils.location('../about.html', null, false)">About</a></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/delivery.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../delivery.html">
Delivery		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/return-policy.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../return-policy.html">
Return Policy		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnLast imPage" data-link-paths=",/contact.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../contact.html">
Contact		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_10_settings = {
	'menuId': 'imHeader_imMenuObject_10',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_10_settings)});
$(function () {$('#imHeader_imMenuObject_10_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_10_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_10_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div><div id="imHeader_imObjectImage_11_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_11"><div id="imHeader_imObjectImage_11_container"><a href="../cart/index.html" onclick ="return x5engine.imShowBox({ media:[{type: 'iframe', url: '../cart/index.html', width: 800, height: 600, description: ''}]}, 0, this);"><img src="../images/cart_icon.png" title="" alt="" />
</a></div></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imMenuObject_01_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_01"><div id="imStickyBar_imMenuObject_01_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.html">
Главная		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">Shop</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/sports.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../sports.html">
Sports		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/running.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../running.html">
Running		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/cycling.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../cycling.html">
Cycling		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/camping.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../camping.html">
Camping		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/sale.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../sale.html">
SALE		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/gift-card.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../gift-card.html">
Gift Card		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnMiddle imLevel" data-link-paths=",/blog/index.php,/blog/" data-link-hash="-1004219381"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../blog/index.php" class="label" onclick="return x5engine.utils.location('../blog/index.php', null, false)">Blog</a></div></div></li><li class="imMnMnMiddle imLevel" data-link-paths=",/about.html" data-link-hash="-1004210789"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../about.html" class="label" onclick="return x5engine.utils.location('../about.html', null, false)">About</a></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/delivery.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../delivery.html">
Delivery		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/return-policy.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../return-policy.html">
Return Policy		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnLast imPage" data-link-paths=",/contact.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../contact.html">
Contact		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_01_settings = {
	'menuId': 'imStickyBar_imMenuObject_01',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_01_settings)});
$(function () {$('#imStickyBar_imMenuObject_01_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_01_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_01_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div><div id="imStickyBar_imMenuObject_02_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_02"><div id="imStickyBar_imMenuObject_02_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.html">
Главная		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">Shop</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/sports.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../sports.html">
Sports		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/running.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../running.html">
Running		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/cycling.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../cycling.html">
Cycling		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/camping.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../camping.html">
Camping		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/sale.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../sale.html">
SALE		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/gift-card.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../gift-card.html">
Gift Card		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnMiddle imLevel" data-link-paths=",/blog/index.php,/blog/" data-link-hash="-1004219381"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../blog/index.php" class="label" onclick="return x5engine.utils.location('../blog/index.php', null, false)">Blog</a></div></div></li><li class="imMnMnMiddle imLevel" data-link-paths=",/about.html" data-link-hash="-1004210789"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../about.html" class="label" onclick="return x5engine.utils.location('../about.html', null, false)">About</a></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/delivery.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../delivery.html">
Delivery		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/return-policy.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../return-policy.html">
Return Policy		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnLast imPage" data-link-paths=",/contact.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../contact.html">
Contact		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_02_settings = {
	'menuId': 'imStickyBar_imMenuObject_02',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_02_settings)});
$(function () {$('#imStickyBar_imMenuObject_02_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_02_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_02_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div><div id="imStickyBar_imObjectImage_03_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectImage_03"><div id="imStickyBar_imObjectImage_03_container"><a href="../cart/index.html" onclick ="return x5engine.imShowBox({ media:[{type: 'iframe', url: '../cart/index.html', width: 800, height: 600, description: ''}]}, 0, this);"><img src="../images/cart_icon.png" title="" alt="" />
</a></div></div></div><div id="imStickyBar_pluginAppObj_04_wrapper" class="template-object-wrapper"><!-- Cart Status v.5 --><div id="imStickyBar_pluginAppObj_04">
    <span style="color: rgba(255, 255, 255, 1);font-family: Open Sans;font-size: 20pt;font-weight: normal;font-style: normal;" class="widget_amount_total"></span>
    </div></div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imBlogPage" class="<?php echo (isset($data['id']) ? 'imBlogArticle' : 'imBlogHome'); ?>"><<?php echo (isset($data['id']) ? 'article' : 'div'); ?> id="imBlogContent"><?php
						$blog->setCommentsPerPage(10);
						if(isset($data['id']))
							$blog->showPost($data['id'],1);
						else if(isset($data['category']))
							$blog->showCategory($data['category']);
						else if(isset($data['author']))
							$blog->showAuthor($data['author']);
						else if(isset($data['tag']))
							$blog->showTag($data['tag']);
						else if(isset($data['month']))
							$blog->showMonth($data['month']);
						else if(isset($data['search']))
							$blog->showSearch($data['search']);
						else
							$blog->showLast(4);
						?>
						</<?php echo (isset($data['id']) ? 'article' : 'div'); ?>>
						<aside id="imBlogSidebar">
							<div class="imBlogBlock" id="imBlogBlock0">
								<div>
									<div class="imBlogBlockTitle">Недавние записи</div>
						<?php $blog->showBlockLast(4) ?>
								</div>
							</div>
							<div class="imBlogBlock" id="imBlogBlock1">
								<div>
									<div class="imBlogBlockTitle">Записи за месяц</div>
						<?php $blog->showBlockMonths(4) ?>
								</div>
							</div>
							<div class="imBlogBlock" id="imBlogBlock2">
								<div>
									<div class="imBlogBlockTitle">Категории</div>
						<?php $blog->showBlockCategories(4) ?>
								</div>
							</div>
						</aside>
						<script>
							x5engine.boot.push(function () { 
								x5engine.blogSidebarScroll({ enabledBreakpoints: ['ea2f0ee4d5cbb25e1ee6c7c4378fee7b', 'd2f9bff7f63c0d6b7c7d55510409c19b', '72e5146e7d399bc2f8a12127e43469f1'] });
								var postHeightAtDesktop = 300,
									postWidthAtDesktop = 1110;
								if ($('#imBlogPage').hasClass('imBlogArticle')) {
									var coverResizeTo = null,
										coverWidth = 0;
									x5engine.utils.onElementResize($('.imBlogPostCover')[0], function (rect, target) {
										if (coverWidth == rect.width) {
											return;
										}
										coverWidth = rect.width;
										if (!!coverResizeTo) {
											clearTimeout(coverResizeTo);
										}
										coverResizeTo = setTimeout(function() {
											$('.imBlogPostCover').height(postHeightAtDesktop * coverWidth / postWidthAtDesktop + 'px');
										}, 50);
									});
								}
							});
						</script>
						</div>
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imTextObject_01_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_01">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_01_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<span class="fs16 cf1 ff1">Opening Time</span><div><b><br></b><div><span class="fs14 cf1">Monday - Friday 8.00 to 18.00</span></div><div><span class="fs14 cf1">Saturday 9.00 to 12.00</span></div><div><span class="fs14 cf1">Call Us +012 345 678 910</span></div></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_03_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_03">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_03_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<span class="fs16lh1-5 cf1 ff1">Contact</span><div><br><div><span class="fs14lh1-5 cf1">Retail Store</span></div><div><span class="fs14lh1-5 cf1">1234 Street Name</span></div><div><span class="fs14lh1-5 cf1">29100 Lorem Ipsum </span></div></div><div><br></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_04_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_04">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_04_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<span class="cf1"><span class="fs16 ff1">Created with </span><span class="fs14">WebSite X5</span></span>
		</div>
	</div>

</div>
</div><div id="imFooter_pluginAppObj_05_wrapper" class="template-object-wrapper"><!-- Social Icons v.16 --><div id="imFooter_pluginAppObj_05">
            <div id="soc_imFooter_pluginAppObj_05">
                <div class="wrapper horizontal flat float">
                	<div class='social-icon flat'><a href='https://www.facebook.com/websitex5' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div><div class='social-icon flat'><a href='https://www.youtube.com/user/incomedia' target='_blank'><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M89.2,34S88.42,28.49,86,26.06c-3-3.19-6.45-3.14-8-3.32C66.81,21.93,50,22,50,22h0s-16.79-.07-28,0.74c-1.56.19-5,.17-8,3.36C11.58,28.53,10.8,34,10.8,34A120.47,120.47,0,0,0,10,47V53A121,121,0,0,0,10.8,66s0.78,5.51,3.18,7.94c3,3.19,7,3.09,8.82,3.42,6.4,0.61,27.2.8,27.2,0.8s16.81,0,28-.83a11.44,11.44,0,0,0,8-3.39C88.42,71.48,89.2,66,89.2,66A121.16,121.16,0,0,0,90,53V47A121.16,121.16,0,0,0,89.2,34ZM41.74,60.38V37.9L63.35,49.18Z"/></g></svg><span class='fallbacktext'>Yt</span></a></div><div class='social-icon flat'><a href='https://twitter.com/WebSiteX5' target='_blank'><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M37,78.44c26.42,0,40.86-21.88,40.86-40.86,0-.62,0-1.24,0-1.86A29.22,29.22,0,0,0,85,28.29a28.67,28.67,0,0,1-8.25,2.26,14.41,14.41,0,0,0,6.32-7.94,28.78,28.78,0,0,1-9.12,3.49,14.37,14.37,0,0,0-24.47,13.1,40.77,40.77,0,0,1-29.6-15,14.37,14.37,0,0,0,4.45,19.17,14.26,14.26,0,0,1-6.5-1.8c0,0.06,0,.12,0,0.18A14.37,14.37,0,0,0,29.33,55.82a14.34,14.34,0,0,1-6.49.25A14.38,14.38,0,0,0,36.26,66a28.82,28.82,0,0,1-17.84,6.15A29.24,29.24,0,0,1,15,72a40.66,40.66,0,0,0,22,6.45"/></svg><span class='fallbacktext'>Tw</span></a></div>
                </div>

            </div>
                <script>
                    socialicons_imFooter_pluginAppObj_05();
                </script>
        </div></div></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a></span>
			</div>
		</div>
		<script src="../cart/x5cart.js?2022-2-6-0-637947973875805042"></script>
		<noscript class="imNoScript"><div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div></noscript>
	</body>
</html>
