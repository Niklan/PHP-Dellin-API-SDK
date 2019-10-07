<?php

namespace Niklan\DellinApi\Client;

use Niklan\DellinApi\Auth\AuthInterface;
use Niklan\DellinApi\Request\RequestInterface;
use Niklan\DellinApi\Response\ResponseInterface;

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
   * @return \Niklan\DellinApi\Response\ResponseInterface
   *   An API response.
   */
  public function request(string $endpoint, array $params = []): ResponseInterface;

  /**
   * Executes request from wrapper.
   *
   * @param \Niklan\DellinApi\Request\RequestInterface $request
   *   The request.
   *
   * @return \Niklan\DellinApi\Response\ResponseInterface
   *   An API response.
   */
  public function execute(RequestInterface $request): ResponseInterface;

  /**
   * Gets client authentication credits.
   *
   * @return \Niklan\DellinApi\Auth\AuthInterface
   *   The authentication credits.
   */
  public function getAuth(): AuthInterface;

}
