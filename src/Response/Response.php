<?php

namespace Drupal\dellin_api\Response;

use GuzzleHttp\Psr7\Response as GuzzleResponse;

/**
 * Defines object representing response from an API.
 */
class Response implements ResponseInterface {

  /**
   * The guzzle response.
   *
   * @var \GuzzleHttp\Psr7\Response
   */
  protected $response;

  /**
   * The result converted to array.
   *
   * @var array
   */
  protected $result;

  /**
   * The raw result.
   *
   * @var mixed
   */
  protected $rawResult;

  /**
   * Constructs a new Response object.
   *
   * @param \GuzzleHttp\Psr7\Response $response
   *   The guzzle response.
   * @param mixed $raw_result
   *   The raw result.
   * @param array $result
   *   The response as array.
   */
  public function __construct(GuzzleResponse $response, $raw_result, array $result) {
    $this->response = $response;
    $this->rawResult = $raw_result;
    $this->result = $result;
  }

  /**
   * {@inheritdoc}
   */
  public function getResult(): array {
    return $this->result;
  }

  /**
   * {@inheritdoc}
   */
  public function getRawResult() {
    return $this->rawResult;
  }

  /**
   * {@inheritdoc}
   */
  public function getResponse(): GuzzleResponse {
    return $this->response;
  }

  /**
   * {@inheritdoc}
   */
  public function isSuccess(): bool {
    return $this->response->getStatusCode() == 200;
  }

}
