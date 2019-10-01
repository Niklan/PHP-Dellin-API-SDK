<?php

namespace Drupal\dellin_api\Api;

use Drupal\Component\Utility\NestedArray;
use Drupal\dellin_api\Auth\AuthInterface;
use Drupal\dellin_api\Auth\ClientAuth;
use Drupal\dellin_api\Auth\PublicAuth;
use Drupal\dellin_api\Client\ClientInterface;

/**
 * Defines a base object representing an API request.
 */
abstract class ApiBase {

  /**
   * The endpoint for request.
   *
   * The endpoint URL with leading dash. The base URL and format will be used
   * from Client. I.e. '/v1/customers/login'.
   *
   * @var string
   */
  protected $endpoint;

  /**
   * The API client.
   *
   * @var \Drupal\dellin_api\Client\ClientInterface
   */
  protected $client;

  /**
   * Constructs a new ApiBase object.
   *
   * @param \Drupal\dellin_api\Client\ClientInterface $client
   *   The API client.
   */
  public function __construct(ClientInterface $client) {
    $this->client = $client;
  }

  /**
   * Executes request to an API endpoint.
   */
  public function execute() {
    $client = $this->getClient();
    $params = NestedArray::mergeDeep($this->getAuthParams(), $this->getRequestParams());

    return $client->request($this->getEndpoint(), $params);
  }

  /**
   * Gets client.
   *
   * @return \Drupal\dellin_api\Client\ClientInterface
   *   The client.
   */
  protected function getClient(): ClientInterface {
    return $this->client;
  }

  /**
   * Gets auth params.
   *
   * @return array
   *   The auth params.
   */
  protected function getAuthParams(): array {
    $client = $this->getClient();
    $auth = $client->getAuth();

    if ($auth instanceof PublicAuth) {
      return [
        'appkey' => $auth->getAppkey(),
      ];
    }
    elseif ($auth instanceof ClientAuth) {
      // Make possible to use ClientAuth before session get requested.
      // This will allow use Login API request with ClientAuth to get session
      // ID.
      if ($auth->getSessionId()) {
        return [
          'appkey' => $auth->getAppkey(),
          'sessionID' => $auth->getSessionId(),
        ];
      }
      else {
        return [
          'appkey' => $auth->getAppkey(),
        ];
      }
    }

    // @todo throw exception.
  }

  /**
   * Gets request params.
   *
   * @return array
   *   The request params.
   */
  protected function getRequestParams(): array {
    return [];
  }

  /**
   * Gets endpoint.
   *
   * @return string|null
   *   The endpoint.
   */
  protected function getEndpoint(): ?string {
    return $this->endpoint;
  }

}
