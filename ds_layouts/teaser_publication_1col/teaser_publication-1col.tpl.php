<?php
/**
 * @file
 * Template for Zurb Foundation One column Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="row zf-1col <?php print $classes;?>">


  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

        <?php print $ds_content_top; ?>
    
    <?php 
    // Good logic for absent of image SÄ 2017
        if(render($content['field_image'])){
            $c1 ="large-4 medium-12";
            $c2 ="large-8 medium-12";
        }else{
            $c1 ="";
            $c2 ="medium-12";
        }
    ?>
    
    <div class="teaser-container">
        <div class="column <?php print $c1; ?>">
            <div class="teaser-image"><?php print render($content['field_image']);  ?></div>
        </div>
        <div class="column <?php print $c2; ?>">
            <div class="above"><?php print strip_tags(render($content['field_above']));  ?></div>
            <h3><?php print trim(strip_tags(render($content['title'])));?></h3>
            <div class="author"><?php print render($content['field_author_2']); ?></div>
            <div class="body"><?php print strip_tags(render($content['body']));  ?></div>
            <div class="download"><?php print render($content['field_pdf']);  ?></div>
            <div class="tags"><?php print render($content['field_articletags']);?></div>
            <div class="readmore"><span>Read more</span></div>
        </div>
    </div>
    
        
      
        <?php print $ds_content; ?>
        <?php print $ds_content_bottom; ?>
        
    
    </<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
