<?php

namespace plugins;

use core\Plugin;

class FPMPlugin extends Plugin {

  public $name = "PHP-FPM";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.fpm.insert', 'plugins\FPMPlugin@insert');
    $events->listen('plugin.fpm.update', 'plugins\FPMPlugin@update');
    $events->listen('plugin.fpm.delete', 'plugins\FPMPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
