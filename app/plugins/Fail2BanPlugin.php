<?php

namespace plugins;

use core\Plugin;

class Fail2BanPlugin extends Plugin {

  public $name = "Fail2Ban";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.fail2ban.insert', 'plugins\Fail2BanPlugin@insert');
    $events->listen('plugin.fail2ban.delete', 'plugins\Fail2BanPlugin@delete');
  }

  public function insert($event) {

  }

  public function delete($event) {

  }

}
