<?php

namespace plugins;

use core\Plugin;

class LaravelPlugin extends Plugin {

  public $name = "Laravel";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.laravel.insert', 'plugins\LaravelPlugin@insert');
    $events->listen('plugin.laravel.update', 'plugins\LaravelPlugin@update');
    $events->listen('plugin.laravel.delete', 'plugins\LaravelPlugin@delete');
    $events->listen('plugin.laravel.deploy', 'plugins\LaravelPlugin@deploy');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

  public function deploy($event) {

  }

}
