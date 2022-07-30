<?php require_once("../../res/x5engine.php"); ?>
<?php
$blog = new imBlog();
$data = $blog->parseUrlArray(@$_GET);
if (!$data['valid'] || !isset($data['id'])) {
  header('Location: ../index.php', true, 302);
}
?>
<!doctype html>
<html ⚡ lang="<?php echo (isset($imSettings['general']['lang_code']) ? $imSettings['general']['lang_code'] : "en"); ?>">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
<?php echo $blog->printAMPIncludes($data['id'], "\t\t"); ?>
    <title><?php echo $blog->pageTitle('Runners never sleeps', ' - '); ?> - <?php echo $imSettings['general']['sitename']; ?></title>
    <link rel="canonical" href="../<?php echo $blog->getSlugUrl($data['id']); ?>">
<?php echo $blog->printAMPWebFontsLinks($data['id'], "\t\t"); ?>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
      html, body, div, span, applet, object, iframe,
      h1, h2, h3, h4, h5, h6, p, blockquote, pre,
      a, abbr, acronym, address, big, cite, code,
      del, dfn, em, font, img, ins, kbd, q, s, samp,
      small, strike, strong, sub, sup, tt, var,
      b, u, i, center,
      dl, dt, dd, ol, ul, li,
      fieldset, form, label, legend,
      table, caption, tbody, tfoot, thead, tr, th, td{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent;}
      body{line-height:1;}
      ol, ul{list-style:none;}
      blockquote, q{quotes:none;}
      blockquote:before, blockquote:after,
      q:before, q:after{content:'';content:none;}
      :focus{outline:0;}
      ins{text-decoration:none;}
      del{text-decoration:line-through;}
      table{border-collapse:collapse;border-spacing:0;}
      table, tbody, tfoot, thead, tr, th, td{vertical-align:top;}
      img{vertical-align:bottom;}
      <?php echo $blog->getAMPCSS($data['id']); ?>
    </style>
<?php
  $rich_data_string = $blog->getRichDataType(true);
  if (!is_null($rich_data_string)) {
    echo "\t\t<script type=\"application/ld+json\">\n$rich_data_string\n\t\t</script>\n";
  }
?>
  </head>
  <body>
    <header class="amp-header">
      <?php echo $blog->getAMPHeaderHTML(); ?>
    </header>
    <main class="post-content">
<?php $blog->showAMPPost($data['id']); ?>
      <a class="canonical-post-button" href="../<?php echo $blog->getSlugUrl($data['id']); ?>"><?php echo l10n('blog_amp_full_version'); ?></a>
    </main>
  </body>
</html>