<?php

namespace Drupal\dellin_api\Client;

use Drupal\dellin_api\Auth\AuthInterface;
use GuzzleHttp\Client;

/**
 * Defines object to make an HTTP request to an API.
 */
class HttpClient extends ClientBase {

  /**
   * The base uri.
   *
   * @var string
   */
  const BASE_URI = 'https://api.dellin.ru';

  /**
   * The HTTP client.
   *
   * @var \GuzzleHttp\Client
   */
  protected $client;

  /**
   * {@inheritdoc}
   */
  public function __construct(AuthInterface $auth, string $format = 'json') {
    parent::__construct($auth, $format);

    $this->client = new Client();
  }

  /**
   * Makes request to API.
   *
   * @param string $endpoint
   *   The API endpoint.
   * @param array $params
   *   The API params send with request.
   *
   * @return \Drupal\smsru\Response\ResponseInterface
   *   The response result.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function request(string $endpoint, array $params = []) {
    // @todo do request.
  }

}
