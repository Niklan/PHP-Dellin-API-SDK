<?php

namespace Drupal\dellin_api\Client;

use Drupal\dellin_api\Auth\AuthInterface;

/**
 * Defines an interface to make requests to the API endpoints.
 */
interface ClientInterface {

  /**
   * Makes request to API.
   *
   * @param string $endpoint
   *   The API endpoint.
   * @param array $params
   *   The API params send with request.
   *
   * @return
   */
  public function request(string $endpoint, array $params = []): ResponseInterface;

  /**
   * Gets client authentication credits.
   *
   * @return \Drupal\dellin_api\Auth\AuthInterface
   *   The authentication credits.
   */
  public function getAuth(): AuthInterface;

}
