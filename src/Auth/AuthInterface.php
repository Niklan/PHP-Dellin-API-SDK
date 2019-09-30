<?php

namespace Drupal\dellin_api\Auth;

/**
 * Defines an interface to representing authentication method.
 */
interface AuthInterface {

  /**
   * Gets the appkey.
   *
   * @return string
   *   The appkey.
   */
  public function getAppkey(): string;

}
