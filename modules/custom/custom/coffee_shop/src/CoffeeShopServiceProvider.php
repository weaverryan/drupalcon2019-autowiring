<?php

namespace Drupal\coffee_shop;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderInterface;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\Finder\Finder;

class CoffeeShopServiceProvider implements ServiceProviderInterface {
  public function register(ContainerBuilder $container) {
    $finder = new Finder();
    $finder->in(__DIR__.'/Service')
      ->files()
      ->name('*.php');

    foreach ($finder as $fileInfo) {
      $class = 'Drupal\coffee_shop\Service\\'
        .substr($fileInfo->getFilename(), 0, -4);

      // don't override any existing service
      if ($container->hasDefinition($class)) {
        continue;
      }

      $definition = new Definition($class);
      $definition->setAutowired(true);
      $container->setDefinition($class, $definition);
    }
  }
}