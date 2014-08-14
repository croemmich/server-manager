<?php

namespace plugins;

use core\Plugin;

class WordpressPlugin extends Plugin {

  public $name = "Wordpress";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.wordpress.insert', 'plugins\WordpressPlugin@insert');
    $events->listen('plugin.wordpress.update', 'plugins\WordpressPlugin@update');
    $events->listen('plugin.wordpress.delete', 'plugins\WordpressPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
