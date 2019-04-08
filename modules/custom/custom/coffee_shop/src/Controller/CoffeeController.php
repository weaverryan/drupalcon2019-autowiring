<?php

namespace Drupal\coffee_shop\Controller;

class CoffeeController {
  public function brewCoffee($type) {
    $text = sprintf('Ding! Your delicious %s is ready!', $type);

    return [
      '#type' => 'markup',
      '#markup' => $text,
    ];
  }
}
