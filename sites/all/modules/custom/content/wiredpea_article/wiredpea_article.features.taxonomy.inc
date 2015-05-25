<?php
/**
 * @file
 * wiredpea_article.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function wiredpea_article_taxonomy_default_vocabularies() {
  return array(
    'similar_weblog_items' => array(
      'name' => 'Similar weblog items',
      'machine_name' => 'similar_weblog_items',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
      'microdata' => array(
        '#attributes' => array(
          'itemscope' => '',
        ),
      ),
    ),
    'tags' => array(
      'name' => 'Tags',
      'machine_name' => 'tags',
      'description' => 'Use tags to group articles on similar topics into categories.',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
      'microdata' => array(
        '#attributes' => array(
          'itemscope' => '',
        ),
      ),
    ),
  );
}
