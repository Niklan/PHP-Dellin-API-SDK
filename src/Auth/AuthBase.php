<?php

namespace Drupal\dellin_api\Auth;

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

  /**
   * {@inheritdoc}
   */
  public function getRequestParams(): array {
    return [
      'appkey' => $this->getAppkey(),
    ];
  }

}
