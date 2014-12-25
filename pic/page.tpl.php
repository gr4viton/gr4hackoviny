<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title ?></title>
<?php print $head ?><?php print $styles ?><?php print $scripts ?>
<?php if (greenNblack_ie_detect()){ 
/**
*this block will be returned for IE browsers only. Implemented to clean up the code for decent browsers
**/
?>
<!--[if lte IE 7]>
<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/ie-fix.css";</style>
<![endif]-->
<!--[if lte IE 6]>
<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/ie6-fix.css";</style>
<script type="text/javascript"> 
$(document).ready(function(){ $(document).pngFix(); }); 
</script> 
<![endif]-->
<?php } ?>
<!--PFT_Banner-->
</head>
<body>
<div id="wrapper"> <?php print $header; ?>
  <div id="header">
    <?php if ($logo) { ?><div id="logo">
      
      <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
     
    </div> <?php } ?>
    <?php if ($site_name) { ?>
    <h1 class="site-name"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
    <?php } ?>
    <?php if ($site_slogan) { ?>
    <div class="site-slogan"><?php print $site_slogan ?></div>
    <?php } ?>
    <?php if (isset($secondary_links)) { ?>
      <div id="secondary"><?php print theme('links', $secondary_links) ?></div>
      <?php } ?>
    <?php if (isset($primary_links)) { ?>
      <div id="primary"><?php print theme('links', $primary_links) ?></div>
      <?php } ?>
  </div>
  <div id="sub_header"> <?php print $subheader ?> <?php print $search_box ?> </div>
  <div id="container"<?php print greenNblack_container($left, $right); ?>>
    <div id="center" class="column">
      <div id="main"><?php print $breadcrumb ?>
        <?php  if ($content_top) { print $content_top; }?>
        <?php if ($title) {  ?>
        <h1 class="title"><?php print $title ?></h1>
        <?php } ?>
        <?php if ($tabs) { ?>
        <div class="tabs"><?php print $tabs ?></div>
        <?php } ?>
        <?php print $help ?> <?php print $messages ?> <?php print $top_content; ?> <?php print $content; ?> </div>
    </div>
    <?php  if ($left) { 	?>
    <div id="left" class="column">
      <?php  print $left;  ?>
    </div>
    <?php } ?>
    <?php if ($right) { ?>
    <div id="right" class="column">
      <?php   print $right; ?>
    </div>
    <?php } ?>
  </div>
  <div id="footer"><?php print theme('links', $primary_links); print greenNblack_footer($footer_message); ?></div>
  <?php print $closure ?>
</div>
</body>
</html>
