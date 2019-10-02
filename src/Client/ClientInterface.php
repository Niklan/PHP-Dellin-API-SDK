<?php

namespace Drupal\dellin_api\Client;

use Drupal\dellin_api\Auth\AuthInterface;
use Drupal\dellin_api\Request\RequestInterface;
use Drupal\dellin_api\Response\ResponseInterface;

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
   * @return \Drupal\dellin_api\Response\ResponseInterface
   *   An API response.
   */
  public function request(string $endpoint, array $params = []): ResponseInterface;

  /**
   * Executes request from wrapper.
   *
   * @param \Drupal\dellin_api\Request\RequestInterface $request
   *   The request.
   *
   * @return \Drupal\dellin_api\Response\ResponseInterface
   *   An API response.
   */
  public function execute(RequestInterface $request): ResponseInterface;

  /**
   * Gets client authentication credits.
   *
   * @return \Drupal\dellin_api\Auth\AuthInterface
   *   The authentication credits.
   */
  public function getAuth(): AuthInterface;

}
