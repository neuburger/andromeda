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

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content" <?php print $content_attributes; ?>>
    <?php
				// We hide the comments and links now so that we can render them later.
				hide ( $content ['comments'] );
				hide ( $content ['links'] );
				// print render($content);
				?>
  </div>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
  
  <?php print render($content['ects']); ?>
  <?php print render($content['wst']); ?>
  <?php print render($content['verantname']); ?>
  <?php print render($content['verantemail']); ?>
  <?php
		
if (! empty ( $content ['lvtypname'] )) {
			print render ( $content ['lvtypname'] );
		} else {
			print render ( $content ['typename'] );
		}
		?>
  <?php print render($content['lehrinhalte']); ?>
  <?php print render($content['ziele']); ?>
  <?php
		
if (! empty ( $node->empfehlung ['und'] ) && is_array ( $node->empfehlung ['und'] )) {
			foreach ( $node->empfehlung ['und'] as $aRelation ) {
				if (! empty ( $aRelation ['endpoints'] [1] ))
					print trim ( $aRelation ['endpoints'] [1], "a..zA..Z?:" );
			}
		}
		?>
  
</div>