<?php

namespace plugins;

use core\Plugin;

class NewRelicPlugin extends Plugin {

  public $name = "NewRelic";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.newrelic.insert', 'plugins\NewRelicPlugin@insert');
    $events->listen('plugin.newrelic.update', 'plugins\NewRelicPlugin@update');
    $events->listen('plugin.newrelic.delete', 'plugins\NewRelicPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
