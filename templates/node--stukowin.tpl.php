<?php

/*
 * To change this license header, choose License Headers in Project Properties. To change this template file, choose Tools | Templates and open the template in the editor.
 */
?>
<div id="node-<?php print $node->nid; ?>"
	class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2 <?php print $title_attributes; ?>>
		<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
	</h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if (! empty ( $content ['lvtypname'] )) {
			print render ( $content ['lvtypname'] );
		} else {
			print render ( $content ['typename'] );
		}?>
  <?php print render($content['code']); ?>
  <?php print render($content['ects']); ?>
  <?php print render($content['wst']); ?>
  <?php print "<br>"; ?>
  <?php print render($content['verantname']); ?>
  <?php print render($content['verantemail']); ?>
  <?php print "<br>"; ?>
	
	<?php  if (!empty($content['lehrinhalte'])) {
  	?>
  	<div class="field field-name-lehrinhalte field-type-text-long field-label-above">
  	<div class="field-label">Lehrinhalte:</div>
  	<div class="field-items"><div class="field-item even">
  	<?= $node->lehrinhalte['und'][0]['value']?>
  	</div></div></div>
  	<?php }?>
  
  <?php  if (!empty($content['ziele'])) {
  	?>
  	<div class="field field-name-ziele field-type-text-long field-label-above">
  	<div class="field-label">Lehrveranstaltungsziele:</div>
  	<div class="field-items"><div class="field-item even">
  	<?= $node->ziele['und'][0]['value']?>
  	</div></div></div>
  <?php }?>
  
  <?php print "<br>"; ?>
  <?php  if (!empty($content['voraussetzungen'])) {
  	?>
  	<div class="field field-name-voraussetzungen field-type-text-long field-label-above">
  	<div class="field-label">Anmeldevoraussetzung(en)</div>
  	<div class="field-items"><div class="field-item even">
  	<?= $node->voraussetzungen['und'][0]['value']?>
  	</div></div></div>
  <?php }?>
  
  <?php print "<br>"; ?>
  <?php  if (!empty($content['code'])) {
  	?>
  	<a href="http://lss.jku.at/studienhandbuch/<?= $node->code['und'][0]['value']?>"><b>Link zum Studienhandbuch</b></a>
  <?php }?>
</div>