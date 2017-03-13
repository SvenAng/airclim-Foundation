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

        
    <?php
        if($node->type == "page"){
            $node_type_text = "";
        }elseif($node->type == "publications"){
            $node_type_text = "Publication";
        }
        elseif($node->type == "acid_news"){
            $node_type_text = "Acid News";
        }
    ?>
        <?php print $ds_content_top; ?>
        
        <?php print "<div class='node-typ'>".$node_type_text. "</div>"; ?>
        
        <h3><?php print trim(strip_tags(render($content['title'])));?></h3>
        <div class="author">
            <?php print render($content['field_an_author']);?>
            <?php print render($content['field_author_2']);?>
            <?php print render($content['field_f_rfattare']);?>
        </div>
        <div class="body"><?php print strip_tags(render($content['body']));  ?></div>
        <div class="tags"><?php print render($content['field_articletags']);?></div>
        <div class="readmore"><span>Read more</span></div>
      
        <?php print $ds_content; ?>
        <?php print $ds_content_bottom; ?>
        
    
    </<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
