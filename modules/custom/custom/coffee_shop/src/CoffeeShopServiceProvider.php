<?php

namespace Drupal\coffee_shop;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderInterface;

class CoffeeShopServiceProvider implements ServiceProviderInterface {
  public function register(ContainerBuilder $container) {
    foreach ($container->getDefinitions() as $id => $definition) {
      if (strpos($id, 'Drupal\\coffee_shop') !== 0) {
        continue;
      }

      $definition->setAutowired(true);
    }
  }
}