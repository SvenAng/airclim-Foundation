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

  <div class="columns small-12 ">
    <<?php print $ds_content_wrapper ?> class="group-content<?php print $ds_content_classes; ?>">
        
        <?php //$kontroll = trim(strip_tags(render($content['field_issue']))); ?>
        <div><img src="/sites/all/themes/airclim/images/Acidnews.gif"></div>
        <div><?php print $ds_content_meta; ?></div>
        <?php print $ds_content_top; ?>
        
        
        <div class="normal"><?php print $ds_content; ?></div>
        <div class="a2a_kit a2a_default_style">
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_google_plus"></a>
            <a class="a2a_dd" href="http://www.addtoany.com/share_save">

            </a>
        </div>

        <script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
        <?php print $ds_content_bottom; ?>
        
    </<?php print $ds_content_wrapper ?>>
  </div>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
