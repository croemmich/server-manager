<?php

namespace plugins;

use core\Plugin;

class MonitPlugin extends Plugin {

  public $name = "Monit";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.monit.insert', 'plugins\MonitPlugin@insert');
    $events->listen('plugin.monit.update', 'plugins\MonitPlugin@update');
    $events->listen('plugin.monit.delete', 'plugins\MonitPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
