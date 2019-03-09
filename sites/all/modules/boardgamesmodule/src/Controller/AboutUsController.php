<?php
/**
 * @file
 * Contains \Drupal\boardgamesmodule\Controller\AboutUsController.
 */

namespace Drupal\boardgamesmodule\Controller;

use Drupal\Core\Controller\ControllerBase;


class AboutUsController extends ControllerBase {

  public function show() {
    $output = array();

    $output['#title'] = 'About Us';

    $output['#markup'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    return $output;
  }

}
