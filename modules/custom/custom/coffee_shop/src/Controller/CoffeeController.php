<?php

namespace Drupal\coffee_shop\Controller;

class CoffeeController {
  public function brewCoffee($type) {
    $barista =  \Drupal::getContainer()
      ->get('Drupal\coffee_shop\Service\Barista');
    $text = $barista->prepareDrink($type);

    return [
      '#type' => 'markup',
      '#markup' => $text,
    ];
  }
}
