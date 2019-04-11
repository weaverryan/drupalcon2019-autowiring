<?php

namespace Drupal\coffee_shop\Service;

class CoffeeMachine {
  private $numberOfScoops;

  public function __construct(int $numberOfScoops) {
    $this->numberOfScoops = $numberOfScoops;
  }

  public function brew()
  {
    return sprintf('coffee brewed using %d scoops!', $this->numberOfScoops);
  }
}
