<?php



$imSettings['blog'] = array(	'description' => 'Лучший блог в мире от Михаила Кутузова',
	'root' => 'http://blog/',
	'home_posts_number' => 4,
	'card_type' => 'leftcoverrightcontents',
	'show_card_title' => true,
	'show_card_category' => true,
	'show_card_description' => true,
	'show_card_author' => true,
	'show_card_date' => true,
	'show_card_button' => true,
	'article_type' => 'titlecovercontents',
	'cover_adapted' => true,
	'cover_height' => 300,
	'amp_header' => "",
	'amp_css' => "\t\t\tbody { font: normal normal normal 12pt 'Arial'; color: rgba(67, 67, 67, 1); background-color: transparent; text-decoration: none; text-align: left; }\n\t\t\t.post-title { padding-top: 2px; padding-bottom: 2px; margin: 5px 0; font: normal normal normal 18pt 'Oswald'; color: rgba(67, 67, 67, 1); background-color: transparent; text-decoration: none; text-align: left;  border-width: 1px; border-style: solid; border-color: transparent transparent transparent transparent; margin-left: 6px; margin-right: 6px; }\n\t\t\t.post-details { padding-top: 2px; padding-bottom: 2px; font: normal normal normal 10pt 'Open Sans'; color: rgba(0, 0, 0, 1); background-color: transparent; text-decoration: none; text-align: left;  border-width: 1px; border-style: solid; border-color: transparent transparent transparent transparent }\n\t\t\t.post-details a { color: rgba(0, 0, 0, 1); }\n\t\t\t.post-body { margin-bottom: 10px; }\n.imHeading1 {font: normal normal normal 20pt 'Oswald'; color: rgba(67, 67, 67, 1); text-decoration: none; text-align: left;  line-height: 40px; margin: 0px 0px 0px 0px;}\n.imHeading2 {font: normal normal normal 14pt 'Open Sans'; color: rgba(67, 67, 67, 1); text-decoration: none; text-align: left;  line-height: 28px; margin: 0px 0px 0px 0px;}\n.imHeading3 {font: normal normal normal 9pt 'Open Sans'; color: rgba(153, 153, 153, 1); text-decoration: none; text-align: left;  line-height: 18px; margin: 0px 0px 0px 0px;}\n.imHeading4 {font: normal normal bold 11pt 'Open Sans'; color: rgba(0, 0, 0, 1); text-decoration: none; text-align: left;  line-height: 22px; margin: 0px 0px 0px 0px;}\n.imHeading5 {font: normal normal bold 11pt 'Open Sans'; color: rgba(0, 0, 0, 1); text-decoration: none; text-align: left;  line-height: 22px; margin: 0px 0px 0px 0px;}\n.imHeading6 {font: normal normal bold 11pt 'Open Sans'; color: rgba(0, 0, 0, 1); text-decoration: none; text-align: left;  line-height: 22px; margin: 0px 0px 0px 0px;}\n\t\t\t.canonical-post-button { display: block; text-decoration: none; text-align: center; cursor: pointer; font: inherit; padding: 10px 20px 10px 20px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1);  background-color: rgba(255, 255, 255, 1); color: rgba(12, 52, 61, 1); border-style: solid; border-width: 1px 1px 1px 1px; border-color: rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1); border-top-left-radius: 2px; border-top-right-radius: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-sizing: content-box; }\n\t\t\tamp-carousel, amp-video, amp-audio, amp-youtube { margin: 10px auto; }\n@media (min-width: 1150.0px) {\n\t\t\t\tbody { background-image: none; background-color: rgba(240, 240, 240, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(240, 240, 240, 1); max-width: 1150px; padding: 0px 10px 0px 10px; margin: 0 auto 0 auto; }\n\t\n}\n@media (max-width: 1149.9px) and (min-width: 720.0px) {\n\t\t\t\tbody { background-image: none; background-color: rgba(240, 240, 240, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(240, 240, 240, 1); max-width: 720px; padding: 0px 10px 0px 10px; margin: 0 auto 0 auto; }\n\t\n}\n@media (max-width: 719.9px) and (min-width: 480.0px) {\n\t\t\t\tbody { background-image: none; background-color: rgba(240, 240, 240, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(240, 240, 240, 1); max-width: 480px; padding: 0px 10px 0px 10px; margin: 0 auto 0 auto; }\n\t\n}\n@media (max-width: 479.9px)  {\n\t\t\t\tbody { background-image: none; background-color: rgba(240, 240, 240, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(240, 240, 240, 1); padding: 0px 10px 0px 10px; margin: 0 auto 0 auto; }\n\t\n}\n",
	'amp_webfonts_links' => array("<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:700,regular&display=swap\" />", "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,700\" />"),
	'file_prefix' => 'x5_',
	'comments_source' => 'wsx5',
	'email' => '',
	'moderate' => false,
	'sendmode' => 'file',
	'folder' => '',
	'comment_type' => 'both',
	'comments_order' => 'asc',
	'comments_on_multiple_columns' => true,
	'abuse' => false,
	'captcha' => false,
	'highlight_mode' => 'slideshow',
	'highlighted_count' => 1,
	'highlighted_card_height' => 300,
	'addThis' => '<!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a></div><script src="//s7.addthis.com/js/300/addthis_widget.js#username=YourAccount"></script><!-- AddThis Button END --><script>(function waitForAddThis() {if (typeof addthis == "undefined" || typeof $ == "undefined") { setTimeout(waitForAddThis, 100); return; }addthis.addEventListener("addthis.ready", function (evt) { $("#imContent").change(); }) })()</script>',
	'categories' => Array('News', 'Run'),
	'posts' => Array(),
	'posts_cat' => Array(),
	'posts_author' => Array(),
	'posts_month' => Array(),
	'posts_slug' => Array()
)
;

// Post titled "First Time Skiers?"
$imSettings['blog']['posts']['s0l4xdks'] = array(
	'id' => 's0l4xdks',
	'rel_url' => '?lorem-ipsum',
	'title' => 'First Time Skiers?',
	'tag_title' => 'First Time Skiers? - Лучший блог в мире',
	'title_heading_tag' => 'h1',
	'slug' => 'lorem-ipsum',
	'author' => 'Admin',
	'category' => 'News',
	'cardCover' => 'blog/files/blog_thumb.jpg',
	'cover' => 'blog/files/blog.jpg',
	'summary' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
	'tag_description' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
	'body' => "<div id=\"imBlogPost_s0l4xdks\"><div><span class=\"fs36lh1-5 cf1 ff1\">A couple of Tricks</span><br></div><div><span class=\"fs11lh1-5\">Pellentesque quis urna adipiscing, rutrum arcu quis, euismod augue. Nunc eleifend vel sem malesuada mattis. Quisque vestibulum consequat mi nec ullamcorper? Nullam quis ipsum sapien. Nulla a ullamcorper purus, in luctus sapien. Nunc laoreet sed arcu eu lacinia! Maecenas tempus tellus et felis dignissim, sodales tempus nisl pharetra.</span> <b class=\"fs11lh1-5\">Ut non justo</b><span class=\"fs11lh1-5\"><span class=\"fs11lh1-5\"> </span>nec massa interdum porta! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut augue lectus.</span></div><div><br></div><div><span class=\"fs11lh1-5\">Nulla tincidunt gravida urna ut luctus. Nullam vitae porttitor eros, vitae bibendum arcu. Etiam a posuere lacus. Nullam ultricies est in est suscipit, sit amet ornare mi aliquet. Praesent facilisis eget quam sed scelerisque. Vivamus semper varius dolor nec dapibus? Nullam egestas iaculis consequat. Maecenas pretium sem id iaculis faucibus. Quisque feugiat dolor vel molestie vestibulum? Ut cursus tempor </span><span class=\"fs11lh1-5\"><b>turpis vel dapibus.</b></span><span class=\"fs11lh1-5\"> Sed eget accumsan arcu. Proin lacinia, leo vitae elementum molestie, nibh nisl semper arcu, in bibendum turpis dui vel quam. In eget sollicitudin orci?</span></div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Лучший блог в мире'
			),
			'datePublished' => '2017-09-18T12:41:00',
			'dateModified' => '2017-09-18T12:41:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Admin'
			),
			'headline' => 'First Time Skiers?',
			'description' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
			'mainEntityOfPage' => 'http://127.0.0.1:8080/blog/?lorem-ipsum',
			'image' => 'http://127.0.0.1:8080/blog\\files\\blog.jpg',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'сентябрь 2017',
					'item' => 'http://127.0.0.1:8080/blog/?month=201709',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'News',
					'item' => 'http://127.0.0.1:8080/blog/?category=News',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Admin',
					'item' => 'http://127.0.0.1:8080/blog/?author=Admin',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'News',
					'item' => 'http://127.0.0.1:8080/blog/?tag=News',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_s0l4xdks\"><div><span class=\"fs36lh1-5 cf1 ff1\">A couple of Tricks</span><br></div><div><span class=\"fs11lh1-5\">Pellentesque quis urna adipiscing, rutrum arcu quis, euismod augue. Nunc eleifend vel sem malesuada mattis. Quisque vestibulum consequat mi nec ullamcorper? Nullam quis ipsum sapien. Nulla a ullamcorper purus, in luctus sapien. Nunc laoreet sed arcu eu lacinia! Maecenas tempus tellus et felis dignissim, sodales tempus nisl pharetra.</span> <b class=\"fs11lh1-5\">Ut non justo</b><span class=\"fs11lh1-5\"><span class=\"fs11lh1-5\"> </span>nec massa interdum porta! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut augue lectus.</span></div><div><br></div><div><span class=\"fs11lh1-5\">Nulla tincidunt gravida urna ut luctus. Nullam vitae porttitor eros, vitae bibendum arcu. Etiam a posuere lacus. Nullam ultricies est in est suscipit, sit amet ornare mi aliquet. Praesent facilisis eget quam sed scelerisque. Vivamus semper varius dolor nec dapibus? Nullam egestas iaculis consequat. Maecenas pretium sem id iaculis faucibus. Quisque feugiat dolor vel molestie vestibulum? Ut cursus tempor </span><span class=\"fs11lh1-5\"><b>turpis vel dapibus.</b></span><span class=\"fs11lh1-5\"> Sed eget accumsan arcu. Proin lacinia, leo vitae elementum molestie, nibh nisl semper arcu, in bibendum turpis dui vel quam. In eget sollicitudin orci?</span></div></div>",
	'body_css' => "#imBlogPost_s0l4xdks div { line-height: 24px; }\n#imBlogPost_s0l4xdks .imHeading1 { line-height: 40px; }\n#imBlogPost_s0l4xdks .imHeading2 { line-height: 28px; }\n#imBlogPost_s0l4xdks .imHeading3 { line-height: 18px; }\n#imBlogPost_s0l4xdks .imHeading4 { line-height: 22px; }\n#imBlogPost_s0l4xdks .imHeading5 { line-height: 22px; }\n#imBlogPost_s0l4xdks .imHeading6 { line-height: 22px; }\n#imBlogPost_s0l4xdks ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_s0l4xdks ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_s0l4xdks ul ul ul { list-style: circle; }\n#imBlogPost_s0l4xdks ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_s0l4xdks ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_s0l4xdks ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_s0l4xdks ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_s0l4xdks blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_s0l4xdks table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_s0l4xdks table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_s0l4xdks p { margin: 0; padding: 0; }\n#imBlogPost_s0l4xdks .inline-block { display: inline-block; }\n#imBlogPost_s0l4xdks sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_s0l4xdks sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_s0l4xdks img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_s0l4xdks .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_s0l4xdks .fright { float: right; vertical-align: baseline;}\n#imBlogPost_s0l4xdks img.fleft { margin-right: 15px; }\n#imBlogPost_s0l4xdks img.fright { margin-left: 15px; }\n#imBlogPost_s0l4xdks .imTALeft { text-align: left; }\n#imBlogPost_s0l4xdks .imTARight { text-align: right; }\n#imBlogPost_s0l4xdks .imTACenter { text-align: center; }\n#imBlogPost_s0l4xdks .imTAJustify { text-align: justify; }\n#imBlogPost_s0l4xdks .imUl { text-decoration: underline; }\n#imBlogPost_s0l4xdks .imStrike { text-decoration: line-through; }\n#imBlogPost_s0l4xdks .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_s0l4xdks .imVt { vertical-align: top; }\n#imBlogPost_s0l4xdks .imVc { vertical-align: middle; }\n#imBlogPost_s0l4xdks .imVb { vertical-align: bottom; }\n#imBlogPost_s0l4xdks hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_s0l4xdks .fs36lh1-5 { vertical-align: baseline; font-size: 36pt; line-height: 72px; }\n#imBlogPost_s0l4xdks .cf1 { color: rgb(54, 82, 217); }\n#imBlogPost_s0l4xdks .ff1 { font-family: 'Oswald'; }\n#imBlogPost_s0l4xdks .fs11lh1-5 { vertical-align: baseline; font-size: 11pt; line-height: 22px; }\n",
	'body_webfonts_links' => array("<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:700,regular&display=swap\" />"),
	'timestamp' => '18/9/2017',
	'utc_time' => 1505738460,
	'month' => '201709',
	'comments' => true,
	'sources' => array(),
	'tag' => array('News'),
	'opengraph' => array(
		'url' => 'http://127.0.0.1:8080/blog/?lorem-ipsum',
		'type' => 'article',
		'title' => 'First Time Skiers?',
		'description' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
		'keywords' => '',
		'updated_time' => '1505742060',
		'images' => array('http://127.0.0.1:8080/blog/files/blog_thumb.jpg','http://127.0.0.1:8080/blog/files/blog.jpg')
	)
);$imSettings['blog']['posts_slug']['lorem-ipsum'] = 's0l4xdks';

// Post titled "Shoe finder 1"
$imSettings['blog']['posts']['000000004'] = array(
	'id' => '000000004',
	'rel_url' => '?shoe-finder-3',
	'title' => 'Shoe finder 1',
	'tag_title' => 'Shoe finder 1 - Лучший блог в мире',
	'title_heading_tag' => 'h1',
	'slug' => 'shoe-finder-3',
	'author' => 'Admin',
	'category' => 'Run',
	'cardCover' => 'blog/files/blog_2_thumb.jpg',
	'cover' => 'blog/files/blog_2.jpg',
	'summary' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'tag_description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'body' => "<div id=\"imBlogPost_000000004\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Лучший блог в мире'
			),
			'datePublished' => '2017-09-14T12:37:00',
			'dateModified' => '2017-09-14T12:37:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Admin'
			),
			'headline' => 'Shoe finder 1',
			'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
			'mainEntityOfPage' => 'http://127.0.0.1:8080/blog/?shoe-finder-3',
			'image' => 'http://127.0.0.1:8080/blog\\files\\blog_2.jpg',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'сентябрь 2017',
					'item' => 'http://127.0.0.1:8080/blog/?month=201709',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 1',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Run',
					'item' => 'http://127.0.0.1:8080/blog/?category=Run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 1',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Admin',
					'item' => 'http://127.0.0.1:8080/blog/?author=Admin',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 1',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'run',
					'item' => 'http://127.0.0.1:8080/blog/?tag=run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 1',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000004\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div></div>",
	'body_css' => "#imBlogPost_000000004 div { line-height: 24px; }\n#imBlogPost_000000004 .imHeading1 { line-height: 40px; }\n#imBlogPost_000000004 .imHeading2 { line-height: 28px; }\n#imBlogPost_000000004 .imHeading3 { line-height: 18px; }\n#imBlogPost_000000004 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000004 .imHeading5 { line-height: 22px; }\n#imBlogPost_000000004 .imHeading6 { line-height: 22px; }\n#imBlogPost_000000004 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000004 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000004 ul ul ul { list-style: circle; }\n#imBlogPost_000000004 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000004 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000004 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000004 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000004 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000004 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000004 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000004 p { margin: 0; padding: 0; }\n#imBlogPost_000000004 .inline-block { display: inline-block; }\n#imBlogPost_000000004 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000004 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000004 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000004 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000004 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000004 img.fleft { margin-right: 15px; }\n#imBlogPost_000000004 img.fright { margin-left: 15px; }\n#imBlogPost_000000004 .imTALeft { text-align: left; }\n#imBlogPost_000000004 .imTARight { text-align: right; }\n#imBlogPost_000000004 .imTACenter { text-align: center; }\n#imBlogPost_000000004 .imTAJustify { text-align: justify; }\n#imBlogPost_000000004 .imUl { text-decoration: underline; }\n#imBlogPost_000000004 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000004 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000004 .imVt { vertical-align: top; }\n#imBlogPost_000000004 .imVc { vertical-align: middle; }\n#imBlogPost_000000004 .imVb { vertical-align: bottom; }\n#imBlogPost_000000004 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000004 .fs36 { vertical-align: baseline; font-size: 36pt; line-height: 72px;  }\n#imBlogPost_000000004 .cf1 { color: rgb(54, 82, 217); }\n#imBlogPost_000000004 .ff1 { font-family: 'Oswald'; }\n",
	'body_webfonts_links' => array("<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:700,regular&display=swap\" />"),
	'timestamp' => '14/9/2017',
	'utc_time' => 1505392620,
	'month' => '201709',
	'comments' => true,
	'sources' => array(),
	'tag' => array('run'),
	'opengraph' => array(
		'url' => 'http://127.0.0.1:8080/blog/?shoe-finder-3',
		'type' => 'article',
		'title' => 'Shoe finder 1',
		'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
		'keywords' => '',
		'updated_time' => '1505396221',
		'images' => array('http://127.0.0.1:8080/blog/files/blog_2_thumb.jpg','http://127.0.0.1:8080/blog/files/blog_2.jpg')
	)
);$imSettings['blog']['posts_slug']['shoe-finder-3'] = '000000004';

// Post titled "Shoe finder 2"
$imSettings['blog']['posts']['000000003'] = array(
	'id' => '000000003',
	'rel_url' => '?shoe-finder-2',
	'title' => 'Shoe finder 2',
	'tag_title' => 'Shoe finder 2 - Лучший блог в мире',
	'title_heading_tag' => 'h1',
	'slug' => 'shoe-finder-2',
	'author' => 'Admin',
	'category' => 'Run',
	'cardCover' => 'blog/files/blog_2_thumb.jpg',
	'cover' => 'blog/files/blog_2.jpg',
	'summary' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'tag_description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'body' => "<div id=\"imBlogPost_000000003\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Лучший блог в мире'
			),
			'datePublished' => '2017-09-14T12:37:00',
			'dateModified' => '2017-09-14T12:37:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Admin'
			),
			'headline' => 'Shoe finder 2',
			'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
			'mainEntityOfPage' => 'http://127.0.0.1:8080/blog/?shoe-finder-2',
			'image' => 'http://127.0.0.1:8080/blog\\files\\blog_2.jpg',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'сентябрь 2017',
					'item' => 'http://127.0.0.1:8080/blog/?month=201709',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 2',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Run',
					'item' => 'http://127.0.0.1:8080/blog/?category=Run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 2',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Admin',
					'item' => 'http://127.0.0.1:8080/blog/?author=Admin',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 2',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'run',
					'item' => 'http://127.0.0.1:8080/blog/?tag=run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 2',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000003\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div></div>",
	'body_css' => "#imBlogPost_000000003 div { line-height: 24px; }\n#imBlogPost_000000003 .imHeading1 { line-height: 40px; }\n#imBlogPost_000000003 .imHeading2 { line-height: 28px; }\n#imBlogPost_000000003 .imHeading3 { line-height: 18px; }\n#imBlogPost_000000003 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000003 .imHeading5 { line-height: 22px; }\n#imBlogPost_000000003 .imHeading6 { line-height: 22px; }\n#imBlogPost_000000003 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000003 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000003 ul ul ul { list-style: circle; }\n#imBlogPost_000000003 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000003 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000003 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000003 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000003 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000003 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000003 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000003 p { margin: 0; padding: 0; }\n#imBlogPost_000000003 .inline-block { display: inline-block; }\n#imBlogPost_000000003 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000003 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000003 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000003 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000003 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000003 img.fleft { margin-right: 15px; }\n#imBlogPost_000000003 img.fright { margin-left: 15px; }\n#imBlogPost_000000003 .imTALeft { text-align: left; }\n#imBlogPost_000000003 .imTARight { text-align: right; }\n#imBlogPost_000000003 .imTACenter { text-align: center; }\n#imBlogPost_000000003 .imTAJustify { text-align: justify; }\n#imBlogPost_000000003 .imUl { text-decoration: underline; }\n#imBlogPost_000000003 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000003 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000003 .imVt { vertical-align: top; }\n#imBlogPost_000000003 .imVc { vertical-align: middle; }\n#imBlogPost_000000003 .imVb { vertical-align: bottom; }\n#imBlogPost_000000003 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000003 .fs36 { vertical-align: baseline; font-size: 36pt; line-height: 72px;  }\n#imBlogPost_000000003 .cf1 { color: rgb(54, 82, 217); }\n#imBlogPost_000000003 .ff1 { font-family: 'Oswald'; }\n",
	'body_webfonts_links' => array("<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:700,regular&display=swap\" />"),
	'timestamp' => '14/9/2017',
	'utc_time' => 1505392620,
	'month' => '201709',
	'comments' => true,
	'sources' => array(),
	'tag' => array('run'),
	'opengraph' => array(
		'url' => 'http://127.0.0.1:8080/blog/?shoe-finder-2',
		'type' => 'article',
		'title' => 'Shoe finder 2',
		'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
		'keywords' => '',
		'updated_time' => '1505396221',
		'images' => array('http://127.0.0.1:8080/blog/files/blog_2_thumb.jpg','http://127.0.0.1:8080/blog/files/blog_2.jpg')
	)
);$imSettings['blog']['posts_slug']['shoe-finder-2'] = '000000003';

// Post titled "Shoe finder 3"
$imSettings['blog']['posts']['000000002'] = array(
	'id' => '000000002',
	'rel_url' => '?shoe-finder',
	'title' => 'Shoe finder 3',
	'tag_title' => 'Shoe finder 3 - Лучший блог в мире',
	'title_heading_tag' => 'h1',
	'slug' => 'shoe-finder',
	'author' => 'Admin',
	'category' => 'Run',
	'cardCover' => 'blog/files/blog_2_thumb.jpg',
	'cover' => 'blog/files/blog_2.jpg',
	'summary' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'tag_description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'body' => "<div id=\"imBlogPost_000000002\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Лучший блог в мире'
			),
			'datePublished' => '2017-09-14T12:37:00',
			'dateModified' => '2017-09-14T12:37:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Admin'
			),
			'headline' => 'Shoe finder 3',
			'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
			'mainEntityOfPage' => 'http://127.0.0.1:8080/blog/?shoe-finder',
			'image' => 'http://127.0.0.1:8080/blog\\files\\blog_2.jpg',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'сентябрь 2017',
					'item' => 'http://127.0.0.1:8080/blog/?month=201709',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 3',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Run',
					'item' => 'http://127.0.0.1:8080/blog/?category=Run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 3',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Admin',
					'item' => 'http://127.0.0.1:8080/blog/?author=Admin',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 3',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'run',
					'item' => 'http://127.0.0.1:8080/blog/?tag=run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 3',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000002\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div></div>",
	'body_css' => "#imBlogPost_000000002 div { line-height: 24px; }\n#imBlogPost_000000002 .imHeading1 { line-height: 40px; }\n#imBlogPost_000000002 .imHeading2 { line-height: 28px; }\n#imBlogPost_000000002 .imHeading3 { line-height: 18px; }\n#imBlogPost_000000002 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000002 .imHeading5 { line-height: 22px; }\n#imBlogPost_000000002 .imHeading6 { line-height: 22px; }\n#imBlogPost_000000002 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000002 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000002 ul ul ul { list-style: circle; }\n#imBlogPost_000000002 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000002 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000002 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000002 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000002 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000002 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000002 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000002 p { margin: 0; padding: 0; }\n#imBlogPost_000000002 .inline-block { display: inline-block; }\n#imBlogPost_000000002 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000002 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000002 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000002 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000002 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000002 img.fleft { margin-right: 15px; }\n#imBlogPost_000000002 img.fright { margin-left: 15px; }\n#imBlogPost_000000002 .imTALeft { text-align: left; }\n#imBlogPost_000000002 .imTARight { text-align: right; }\n#imBlogPost_000000002 .imTACenter { text-align: center; }\n#imBlogPost_000000002 .imTAJustify { text-align: justify; }\n#imBlogPost_000000002 .imUl { text-decoration: underline; }\n#imBlogPost_000000002 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000002 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000002 .imVt { vertical-align: top; }\n#imBlogPost_000000002 .imVc { vertical-align: middle; }\n#imBlogPost_000000002 .imVb { vertical-align: bottom; }\n#imBlogPost_000000002 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000002 .fs36 { vertical-align: baseline; font-size: 36pt; line-height: 72px;  }\n#imBlogPost_000000002 .cf1 { color: rgb(54, 82, 217); }\n#imBlogPost_000000002 .ff1 { font-family: 'Oswald'; }\n",
	'body_webfonts_links' => array("<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:700,regular&display=swap\" />"),
	'timestamp' => '14/9/2017',
	'utc_time' => 1505392620,
	'month' => '201709',
	'comments' => true,
	'sources' => array(),
	'tag' => array('run'),
	'opengraph' => array(
		'url' => 'http://127.0.0.1:8080/blog/?shoe-finder',
		'type' => 'article',
		'title' => 'Shoe finder 3',
		'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
		'keywords' => '',
		'updated_time' => '1505396221',
		'images' => array('http://127.0.0.1:8080/blog/files/blog_2_thumb.jpg','http://127.0.0.1:8080/blog/files/blog_2.jpg')
	)
);$imSettings['blog']['posts_slug']['shoe-finder'] = '000000002';

// Post titled "Shoe finder 4"
$imSettings['blog']['posts']['000000001'] = array(
	'id' => '000000001',
	'rel_url' => '?what-running-shoes-are-fit-for-me-',
	'title' => 'Shoe finder 4',
	'tag_title' => 'Shoe finder 4 - Лучший блог в мире',
	'title_heading_tag' => 'h1',
	'slug' => 'what-running-shoes-are-fit-for-me-',
	'author' => 'Admin',
	'category' => 'Run',
	'cardCover' => 'blog/files/blog_2_thumb.jpg',
	'cover' => 'blog/files/blog_2.jpg',
	'summary' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'tag_description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'body' => "<div id=\"imBlogPost_000000001\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Лучший блог в мире'
			),
			'datePublished' => '2017-09-14T12:37:00',
			'dateModified' => '2017-09-14T12:37:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Admin'
			),
			'headline' => 'Shoe finder 4',
			'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
			'mainEntityOfPage' => 'http://127.0.0.1:8080/blog/?what-running-shoes-are-fit-for-me-',
			'image' => 'http://127.0.0.1:8080/blog\\files\\blog_2.jpg',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'сентябрь 2017',
					'item' => 'http://127.0.0.1:8080/blog/?month=201709',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 4',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Run',
					'item' => 'http://127.0.0.1:8080/blog/?category=Run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 4',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Admin',
					'item' => 'http://127.0.0.1:8080/blog/?author=Admin',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 4',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Лучший блог в мире',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'run',
					'item' => 'http://127.0.0.1:8080/blog/?tag=run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder 4',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000001\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div></div>",
	'body_css' => "#imBlogPost_000000001 div { line-height: 24px; }\n#imBlogPost_000000001 .imHeading1 { line-height: 40px; }\n#imBlogPost_000000001 .imHeading2 { line-height: 28px; }\n#imBlogPost_000000001 .imHeading3 { line-height: 18px; }\n#imBlogPost_000000001 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000001 .imHeading5 { line-height: 22px; }\n#imBlogPost_000000001 .imHeading6 { line-height: 22px; }\n#imBlogPost_000000001 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000001 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000001 ul ul ul { list-style: circle; }\n#imBlogPost_000000001 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000001 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000001 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000001 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000001 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000001 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000001 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000001 p { margin: 0; padding: 0; }\n#imBlogPost_000000001 .inline-block { display: inline-block; }\n#imBlogPost_000000001 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000001 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000001 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000001 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000001 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000001 img.fleft { margin-right: 15px; }\n#imBlogPost_000000001 img.fright { margin-left: 15px; }\n#imBlogPost_000000001 .imTALeft { text-align: left; }\n#imBlogPost_000000001 .imTARight { text-align: right; }\n#imBlogPost_000000001 .imTACenter { text-align: center; }\n#imBlogPost_000000001 .imTAJustify { text-align: justify; }\n#imBlogPost_000000001 .imUl { text-decoration: underline; }\n#imBlogPost_000000001 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000001 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000001 .imVt { vertical-align: top; }\n#imBlogPost_000000001 .imVc { vertical-align: middle; }\n#imBlogPost_000000001 .imVb { vertical-align: bottom; }\n#imBlogPost_000000001 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000001 .fs36 { vertical-align: baseline; font-size: 36pt; line-height: 72px;  }\n#imBlogPost_000000001 .cf1 { color: rgb(54, 82, 217); }\n#imBlogPost_000000001 .ff1 { font-family: 'Oswald'; }\n",
	'body_webfonts_links' => array("<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:700,regular&display=swap\" />"),
	'timestamp' => '14/9/2017',
	'utc_time' => 1505392620,
	'month' => '201709',
	'comments' => true,
	'sources' => array(),
	'tag' => array('run'),
	'opengraph' => array(
		'url' => 'http://127.0.0.1:8080/blog/?what-running-shoes-are-fit-for-me-',
		'type' => 'article',
		'title' => 'Shoe finder 4',
		'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
		'keywords' => '',
		'updated_time' => '1505396221',
		'images' => array('http://127.0.0.1:8080/blog/files/blog_2_thumb.jpg','http://127.0.0.1:8080/blog/files/blog_2.jpg')
	)
);$imSettings['blog']['posts_slug']['what-running-shoes-are-fit-for-me-'] = '000000001';
$imSettings['blog']['posts_cat'] = array(
	'News' => array(
		's0l4xdks'
	),
	'Run' => array(
		'000000004',
		'000000003',
		'000000002',
		'000000001'
	)
);
$imSettings['blog']['posts_author'] = array(
	'Admin' => array(
		's0l4xdks',
		'000000004',
		'000000003',
		'000000002',
		'000000001'
	)
);
$imSettings['blog']['posts_month'] = array(
	'201709' => array(
		's0l4xdks',
		'000000004',
		'000000003',
		'000000002',
		'000000001'
	)
);
$imSettings['blog']['posts_tag'] = array(
	'News' => array(
		's0l4xdks'
	),
	'run' => array(
		'000000004',
		'000000003',
		'000000002',
		'000000001'
	)
);

// End of file blog.inc.php