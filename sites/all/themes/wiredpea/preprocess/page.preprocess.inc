<?php

/**
 * Implements hook_preprocess_page().
 */
function wiredpea_preprocess_page(&$variables) {
  // You can use preprocess hooks to modify the variables before they are passed
  // to the theme function or template file.

  $has_header = array('article');

  if (isset($variables['node']) && in_array($variables['node']->type, $has_header)) {
    $header_fields = field_get_items('node', $variables['node'], 'field_header_image');

    if ($header_fields !== FALSE) {
      $file = file_load($header_fields[0]['fid']);
      $url = $file->uri;
      $variables['header_image'] = file_create_url($url);
    }
  }
}
