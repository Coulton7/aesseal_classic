<?php

function aesseal_classic_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($node->type == 'productbrochure' || $node->type == 'installationguides' || $node->type == 'whitepaper'|| $node->type == 'case_studies') {
    $variables['theme_hook_suggestion'] = 'node__industryguide';
  }
}


function hook_preprocess_page(&$vars) {
  drupal_add_js('<?php echo base_path(); ?>sites/all/themes/aesseal_classic/js/hubspot-progressive-profile.js', 'external');
}


function THEMENAME_preprocess_node(&$variables, $hook) {
  // Node template suggestions based off URL alias
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $alias = str_replace('-', '_', $alias);
      $template_filename = 'node';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '__' . $path_part;
        $variables['theme_hook_suggestions'][] = $template_filename;
      }
    }
  }
}

/**
 * @file template.php
 */

drupal_add_js('sites/all/themes/aesseal_classic/js/contactustext.js');