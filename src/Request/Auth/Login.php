<?php

namespace Drupal\dellin_api\Request\Auth;

use Drupal\dellin_api\Request\RequestBase;

/**
 * Defines login API request.
 */
final class Login extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/customers/login';

  /**
   * Constructs a new Login object.
   *
   * @param string $login
   *   The login.
   * @param string $password
   *   The password.
   */
  public function __construct(string $login, string $password) {
    $this->requestParams['login'] = $login;
    $this->requestParams['password'] = $password;
  }

}
