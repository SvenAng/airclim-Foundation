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
    
    <div class="node-container">
        <div class="column <?php print $c1; ?>">
            <div class="image"><?php print render($content['field_image']);  ?></div>
        </div>
        <div class="column <?php print $c2; ?>">
            
            <div class="above"><?php print strip_tags(render($content['field_above']));  ?></div>
            <h1><?php print trim(strip_tags(render($content['title'])));?></h1>
            <div class="date"><?php print trim(strip_tags(render($content['field_pdate'])));?></div>
            <div class="author"><?php print render($content['field_author_2']); ?></div>
            <div class="body"><?php print render($content['body']);  ?></div>
            <div class="download"><?php print render($content['field_pdf']);  ?></div>
            <div class="tag-metadata"><?php print render($content['field_articletags']);?></div>
            <div class="typ"><?php print render($content['field_publication_kind']);  ?></div>
            
        </div>
    </div>
    
        
      
        <?php print $ds_content; ?>
        <?php print $ds_content_bottom; ?>
        
    
    </<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
