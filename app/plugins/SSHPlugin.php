<?php

namespace plugins;

use core\Plugin;

class SSHPlugin extends Plugin {

  public $name = "SSH";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('plugin.ssh.insert', 'plugins\SSHPlugin@insert');
    $events->listen('plugin.ssh.update', 'plugins\SSHPlugin@update');
    $events->listen('plugin.ssh.delete', 'plugins\SSHPlugin@delete');
  }

  public function insert($event) {

  }

  public function update($event) {

  }

  public function delete($event) {

  }

}
