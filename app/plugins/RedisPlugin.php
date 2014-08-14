<?php

namespace plugins;

use core\Plugin;

class RedisPlugin extends Plugin {

  public $name = "Redis";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.redis.insert', 'plugins\RedisPlugin@insert');
    $events->listen('plugin.redis.update', 'plugins\RedisPlugin@update');
    $events->listen('plugin.redis.delete', 'plugins\RedisPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
