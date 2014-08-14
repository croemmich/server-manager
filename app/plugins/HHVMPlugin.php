<?php

namespace plugins;

use core\Plugin;

class HHVMPlugin extends Plugin {

  public $name = "HHVM";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.hhvm.insert', 'plugins\HHVMPlugin@insert');
    $events->listen('plugin.hhvm.update', 'plugins\HHVMPlugin@update');
    $events->listen('plugin.hhvm.delete', 'plugins\HHVMPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
