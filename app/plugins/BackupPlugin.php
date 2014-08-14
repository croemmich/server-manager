<?php

namespace plugins;

use core\Plugin;

class BackupPlugin extends Plugin {

  public $name = "Backup";
  public $version = 1;

  public function subscribe($events) {
    $events->listen('backup.*', 'plugins\BackupPlugin');
  }

}
