<?php

namespace plugins;

use core\Plugin;

class NginxPlugin extends Plugin {

  public $name = "Nginx";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.nginx.insert', 'plugins\NginxPlugin@insert');
    $events->listen('plugin.nginx.update', 'plugins\NginxPlugin@update');
    $events->listen('plugin.nginx.delete', 'plugins\NginxPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
