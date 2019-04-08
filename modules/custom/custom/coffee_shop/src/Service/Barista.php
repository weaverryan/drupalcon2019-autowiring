<?php

namespace Drupal\coffee_shop\Service;

use Drupal\Core\Config\ConfigFactoryInterface;

class Barista {
  private $configFactory;

  public function __construct(ConfigFactoryInterface $configFactory) {
    $this->configFactory = $configFactory;
  }

  public function prepareDrink($type) {
    // pretend like I'm using the configFactory
    //$value = $this->configFactory->get('some_form_name')->get('some_field');

    $sizes = ['small', 'medium', 'large', 'scary huge'];
    $statuses = ['for here', 'to go', 'to sip while standing pensively'];

    $template = 'A %size% %type% prepared %status%. Enjoy!';

    return strtr($template, [
      '%size%' => $sizes[array_rand($sizes)],
      '%type%' => $type,
      '%status%' => $statuses[array_rand($statuses)],
    ]);
  }
}
