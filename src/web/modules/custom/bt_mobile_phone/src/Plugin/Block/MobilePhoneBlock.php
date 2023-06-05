<?php

/**
 *  @file
 *  Creates a block which displays random Mobile Phone.
 */

namespace Drupal\bt_mobile_phone\Plugin\Block;

use Drupal;
use Drupal\Core\Block\BlockBase;

/**
 * Provides Random Mobile Phone block.
 *
 * @Block(
 *   id = "mobile_phone_block",
 *   admin_label = @Translation("Mobile Phone Block")
 * )
 */
class MobilePhoneBlock extends BlockBase
{
  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $query = Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'bt_mobile_phone']);

    return [
      '#theme' => 'mobile_phone_block',
      '#entity' => $query[array_rand($query)]
    ];
  }
}
