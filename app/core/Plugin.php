<?php

namespace core;

use Illuminate\Support\Facades\Event;

abstract class Plugin {

  public $name;
  public $version = 1;

  public function install() {

  }

  public function onInstall() {

  }

  public function onLoad() {
    Event::subscribe($this);
  }

  /**
   * Register the listeners for the subscriber.
   *
   * @param  Illuminate\Events\Dispatcher $events
   * @return array
   */
  public function subscribe($events) {

  }

  public function upgrade() {

  }

  public function onUpgrade($oldVersion, $newVersion) {

  }

  public function uninstall() {

  }

  public function onUninstall() {

  }

}
