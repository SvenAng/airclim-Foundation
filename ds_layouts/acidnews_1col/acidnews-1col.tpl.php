<?php
/**
 * @file
 * Template for Zurb Foundation One column Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="zf-1col <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="columns small-12 <?php print $zf_wrapper_classes; ?>">
    <<?php print $ds_content_wrapper ?> class="group-content<?php print $ds_content_classes; ?>">
        
        <?php $kontroll = trim(strip_tags(render($content['field_issue']))); ?>
    
        <?php print $ds_content_top; ?>
        
        <?php if ($kontroll == "Main Article"): ?>
            <?php print render($node->body[$node->language][0]['safe_summary']);  ?>
            <div class="open-an-main-article-button readmore"><span>Read more</span></div>
            <div class="open-an-main-article"><?php print $ds_content; ?></div>
            <div class="close-an-main-article-button readmore"><span>Hide main text</span></div>
        <?php else: ?>
            <div class="normal"><?php print $ds_content; ?></div>
        <?php endif; ?>
        
        
        <?php print $ds_content_bottom; ?>
        
    </<?php print $ds_content_wrapper ?>>
  </div>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
