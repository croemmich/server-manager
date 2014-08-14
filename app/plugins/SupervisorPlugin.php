<?php

namespace plugins;

use core\Plugin;

class SupervisorPlugin extends Plugin {

  public $name = "Supervisor";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.supervisor.insert', 'plugins\SupervisorPlugin@insert');
    $events->listen('plugin.supervisor.update', 'plugins\SupervisorPlugin@update');
    $events->listen('plugin.supervisor.delete', 'plugins\SupervisorPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
