<?php

/**
 * @file
 * Default theme implementation to present the feedback form.
 *
 * @see template_preprocess_feedback_form_display()
 */
?>
<div id="block-cittaslow-block">
  <span class="cittaslow-link">
    cittaslow
  </span>
  <div class="content">
  <?php
    $block = block_load('block','5');
    $output = _block_get_renderable_array(_block_render_blocks(array($block)));
    print drupal_render($output);
  ?>
  </div>
</div>
