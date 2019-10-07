<?php

namespace Niklan\dellin_api\Request;

/**
 * Defines a base object representing an API request.
 */
abstract class RequestBase implements RequestInterface {

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
   * The request params.
   *
   * @var array
   */
  protected $requestParams = [];

  /**
   * {@inheritdoc}
   */
  public function getRequestParams(): array {
    return $this->requestParams;
  }

  /**
   * {@inheritdoc}
   */
  public function getEndpoint(): string {
    return $this->endpoint;
  }

}
