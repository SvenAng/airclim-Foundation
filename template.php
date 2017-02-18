<?php

/**
 * Implements template_preprocess_html().
 */
function airclim_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function airclim_preprocess_page(&$variables) {

    if (!empty($variables['page']['sidebar_first'])) {
        $left = $variables['page']['sidebar_first'];
    }

    if (!empty($variables['page']['sidebar_second'])) {
        $right = $variables['page']['sidebar_second'];
    }
    
    // Dynamic sidebars.
    if (!empty($left) && !empty($right)) {
        $variables['main_grid'] = 'medium-6 medium-push-3';
        $variables['sidebar_first_grid'] = 'medium-3 medium-pull-6';
        $variables['sidebar_sec_grid'] = 'medium-3';
    }
    elseif (empty($left) && !empty($right)) {
        $variables['main_grid'] = 'medium-8';
        $variables['sidebar_first_grid'] = '';
        $variables['sidebar_sec_grid'] = 'medium-4';
    }
    elseif (!empty($left) && empty($right)) {
        $variables['main_grid'] = 'medium-9 medium-push-3';
        $variables['sidebar_first_grid'] = 'medium-3 medium-pull-9';
        $variables['sidebar_sec_grid'] = '';
    }
    else {
        $variables['main_grid'] = '';
        $variables['sidebar_first_grid'] = '';
        $variables['sidebar_sec_grid'] = '';
    }
}

/**
 * Implements template_preprocess_node.
 */
function airclim_preprocess_node(&$variables) {
}
function airclim_menu_tree__menu_block__11($variables){
    return '<ul class="menu mobilmeny">' . $variables['tree'] . '</ul>';
}

function airclim_menu_link__menu_block__11(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';

    if ($element['#below']) {

        // Wrap in dropdown-menu.
        unset($element['#below']['#theme_wrappers']);
        $sub_menu = '<span class="open-sub">+</span><ul class="mobilmeny-submenu">' . drupal_render($element['#below']) . '</ul>';

    }else{
        // här funkar custom a class
        $variables['element']['#localized_options']['attributes']['class'][] = 'level2-link';
        return theme_menu_link($variables);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function airclim_breadcrumb($variables) { 
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
        $show_home = theme_get_setting('show_home');
        if (!$show_home && $breadcrumb[0] == l(t('Home'), '')) {
            array_shift($breadcrumb);
        }
        $count = count($breadcrumb) - 1;
        $items = array();
        foreach($breadcrumb as $key => $value) {
            if($count != $key) {
                $d = filter_xss(theme_get_setting('breadcrumb_delimiter'));
                $items[] = $value . '' . (empty($d) ? '|' : $d) . '';
            }else{
                $items[] = $value;
            }
        }
        $return = array(
            '#theme' => 'item_list',
            '#items' => $items
        );
        return drupal_render($return);
    }
}
