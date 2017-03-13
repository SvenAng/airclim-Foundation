<?php
/**
 * @file
 * Definition of Zurb Foundation One column Display Suite layout.
 */

function ds_teaser_publication_1col() {
  return array(
    'label' => t('Airclim Teaser for Publications'),
    'regions' => array(
      'ds_content_top' => t('Content Top'),
      'ds_content' => t('Content'),
      'ds_content_bottom' => t('Content Bottom'),
      'hidden_fields' => t('Hidden but Rendered Fields'),
    ),
    'image' => TRUE,
  );
}
