<?php

namespace Drupal\coffee_shop\Controller;

use Drupal\coffee_shop\Service\Barista;

class CoffeeController {
  public function brewCoffee($type) {
    $barista =  \Drupal::getContainer()
      ->get(Barista::class);
    $text = $barista->prepareDrink($type);

    return [
      '#type' => 'markup',
      '#markup' => $text,
    ];
  }
}
