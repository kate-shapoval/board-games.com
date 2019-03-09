<?php

/**
 * @file
 * Contains \Drupal\boardgamesmodule\Plugin\Block\CopyrightBlock.
 */

namespace Drupal\boardgamesmodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "copyright_block",
 *   admin_label = @Translation("Copyright block"),
 * )
 */
class CopyrightBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $block = [
      '#type' => 'markup',
      '#markup' => '<strong>Board Games &copy; 2019</strong>'
    ];
    return $block;
  }

}
