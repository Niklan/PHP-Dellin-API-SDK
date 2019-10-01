<?php

namespace Drupal\dellin_api\Api\Auth;

use Drupal\dellin_api\Api\ApiBase;

/**
 * Defines login API request.
 */
final class Login extends ApiBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/customers/login';

  /**
   * {@inheritdoc}
   */
  protected function getRequestParams(): array {
    $client = $this->getClient();
    $auth = $client->getAuth();

    return [
      'login' => $auth->getLogin(),
      'password' => $auth->getPassword(),
    ];
  }

}
