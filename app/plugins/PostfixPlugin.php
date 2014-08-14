<?php

namespace plugins;

use core\Plugin;

class PostfixPlugin extends Plugin {

  public $name = "Postfix";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.postfix.insert', 'plugins\PostfixPlugin@insert');
    $events->listen('plugin.postfix.update', 'plugins\PostfixPlugin@update');
    $events->listen('plugin.postfix.delete', 'plugins\PostfixPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
