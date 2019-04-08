<?php

namespace Drupal\coffee_shop\Service;

class Barista {
  public function prepareDrink($type) {
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
