<?php

namespace plugins;

use core\Plugin;

class SSLPlugin extends Plugin {

  public $name = "SSL";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.ssl.insert', 'plugins\SSLPlugin@insert');
    $events->listen('plugin.ssl.update', 'plugins\SSLPlugin@update');
    $events->listen('plugin.ssl.delete', 'plugins\SSLPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
