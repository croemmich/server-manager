<?php

namespace plugins;

use core\Plugin;

class NetworkPlugin extends Plugin {

  public $name = "Network";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.network.insert', 'plugins\NetworkPlugin@insert');
    $events->listen('plugin.network.update', 'plugins\NetworkPlugin@update');
    $events->listen('plugin.network.delete', 'plugins\NetworkPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
