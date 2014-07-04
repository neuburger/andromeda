<?php
// $Id$

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>


<?php  
// Implementation of the adjustment of the black bottom rows starts here

echo '<script>';

echo 'var height = screen.height;';
// echo '$(document).ready(function(){ var availheight = $(this).(document).height();});';
echo 'var availheight = screen.availHeight;';
echo 'var blockheight = (availheight/100)*66.6;';
echo 'if(availheight<850){blockheight = (availheight/100)*56.5;}';
echo 'if(availheight>850 && availheight<950){blockheight = (availheight/100)*61.5;}';

// echo 'alert("Height: " + height + ", Availheight: " + availheight + ", Wrapper height: " + blockheight);';

echo 'document.write("<style>");';
echo 'document.write("#page-wrapper {width: 940px; margin: 0 auto; clear: both; height: 100%; min-height:" + blockheight + "px ; }");';
echo 'document.write("</style>");';
echo '</script>';

// Implementation of the adjustment of the black bottom rows ends here
?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
