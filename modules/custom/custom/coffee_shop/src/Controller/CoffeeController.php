<?php

namespace Drupal\coffee_shop\Controller;

class CoffeeController {
  public function brewCoffee($type) {
    $barista =  \Drupal::getContainer()
      ->get('coffee_shop.barista');
    $text = $barista->prepareDrink($type);

    return [
      '#type' => 'markup',
      '#markup' => $text,
    ];
  }
}
