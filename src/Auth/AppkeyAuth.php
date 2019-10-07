<?php

namespace Niklan\dellin_api\Auth;

/**
 * Defines public authentication method.
 *
 * This method allows to use restricted API.
 *
 * @see https://dev.dellin.ru/api/
 */
final class AppkeyAuth extends AuthBase {

  /**
   * Constructs a new PublicAuth object.
   *
   * @param string $appkey
   *   The appkey.
   */
  public function __construct(string $appkey) {
    $this->appkey = $appkey;
  }

}
