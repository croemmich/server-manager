<?php

namespace plugins;

use core\Plugin;

class FirewallPlugin extends Plugin {

  public $name = "Firewall";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.firewall.insert', 'plugins\FirewallPlugin@insert');
    $events->listen('plugin.firewall.update', 'plugins\FirewallPlugin@update');
    $events->listen('plugin.firewall.delete', 'plugins\FirewallPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
