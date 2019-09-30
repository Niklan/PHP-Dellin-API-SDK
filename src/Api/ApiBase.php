<?php

namespace Drupal\dellin_api\Api;

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
    return $client->request($this->getEndpoint(), $this->getRequestParams());
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

  /**
   * Gets client.
   *
   * @return \Drupal\dellin_api\Client\ClientInterface
   *   The client.
   */
  protected function getClient(): ClientInterface {
    return $this->client;
  }

}
