<?php

namespace Drupal\delling_api\Auth;

use Drupal\dellin_api\Auth\AuthInterface;

/**
 * Provides authentication base.
 */
abstract class AuthBase implements AuthInterface {

  /**
   * The appkey.
   *
   * @var string
   */
  protected $appkey;

  /**
   * {@inheritdoc}
   */
  public function getAppkey(): string {
    return $this->appkey;
  }

}
