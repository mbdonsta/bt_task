<?php

namespace Drupal\bt_mobile_phone\Controller;

use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class MobilePhoneController extends ControllerBase
{
  /**
   * Returns all mobile phones Json.
   */
  public function listJson()
  {
    $data = $this->getPhones();

    return new JsonResponse($this->parseForJson($data));
  }

  private function getPhones()
  {
    return Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'bt_mobile_phone']);
  }

  private function parseForJson(?array $data)
  {
    if (!$data) {
      return null;
    }

    $result = [];

    foreach ($data as $item) {
      $result[] = [
        'brand' => $item->get('field_brand')->entity ? $item->get('field_brand')->entity->label() : '',
        'model' => $item->get('field_model')->value,
        'price' => $item->get('field_price')->value,
        'available' => $item->get('field_available')->value
      ];
    }

    return $result;
  }
}
