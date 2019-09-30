<?php

namespace Drupal\dellin_api\Api\Auth;

use Drupal\dellin_api\Api\ApiBase;
use Drupal\dellin_api\Api\PublicApiInterface;

/**
 * Defines login API request.
 */
final class Login extends ApiBase implements PublicApiInterface {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/customers/login';

  /**
   * {@inheritdoc}
   */
  protected function getRequestParams(): array {
    // @todo
  }

}
