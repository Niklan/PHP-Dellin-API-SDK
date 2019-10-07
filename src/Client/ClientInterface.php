<?php

namespace Niklan\dellin_api\Client;

use Niklan\dellin_api\Auth\AuthInterface;
use Niklan\dellin_api\Request\RequestInterface;
use Niklan\dellin_api\Response\ResponseInterface;

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
   * @return \Niklan\dellin_api\Response\ResponseInterface
   *   An API response.
   */
  public function request(string $endpoint, array $params = []): ResponseInterface;

  /**
   * Executes request from wrapper.
   *
   * @param \Niklan\dellin_api\Request\RequestInterface $request
   *   The request.
   *
   * @return \Niklan\dellin_api\Response\ResponseInterface
   *   An API response.
   */
  public function execute(RequestInterface $request): ResponseInterface;

  /**
   * Gets client authentication credits.
   *
   * @return \Niklan\dellin_api\Auth\AuthInterface
   *   The authentication credits.
   */
  public function getAuth(): AuthInterface;

}
