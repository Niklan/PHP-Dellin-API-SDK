<?php

namespace Niklan\dellin_api\Client;

use Drupal\Component\Utility\NestedArray;
use Niklan\dellin_api\Auth\AuthInterface;
use Niklan\dellin_api\Request\RequestInterface;
use Niklan\dellin_api\Response\Response;
use Niklan\dellin_api\Response\ResponseInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

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
  public function __construct(AuthInterface $auth) {
    parent::__construct($auth);

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
   * @return \Niklan\dellin_api\Response\ResponseInterface
   *   An API response.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function request(string $endpoint, array $params = []): ResponseInterface {
    $uri = self::BASE_URI . $endpoint . '.' . $this->format;
    // Add auth params.
    $params = NestedArray::mergeDeep($this->getAuth()->getRequestParams(), $params);

    switch ($this->format) {
      case 'json':
      default:
        return $this->doJsonRequest($uri, $params);
    }
  }

  /**
   * {@ineritdoc}
   */
  public function execute(RequestInterface $request): ResponseInterface {
    return $this->request($request->getEndpoint(), $request->getRequestParams());
  }

  /**
   * Makes request with JSON type.
   *
   * @param string $uri
   *   The API uri.
   * @param array $params
   *   The request params.
   *
   * @return \Niklan\dellin_api\Response\Response
   *   An API response.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  protected function doJsonRequest(string $uri, array $params) {
    try {
      $guzzle_response = $this->client->request('POST', $uri, [
        'json' => $params,
      ]);
    }
    catch (RequestException $exception) {
      $guzzle_response = $exception->getResponse();
    }

    $contents = $guzzle_response->getBody()->getContents();

    return new Response($guzzle_response, $contents, json_decode($contents, TRUE));
  }

}
