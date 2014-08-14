<?php

namespace plugins;

use core\Plugin;

class CronPlugin extends Plugin {

  public $name = "Cron";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.cron.insert', 'plugins\CronPlugin@insert');
    $events->listen('plugin.cron.update', 'plugins\CronPlugin@update');
    $events->listen('plugin.cron.delete', 'plugins\CronPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
