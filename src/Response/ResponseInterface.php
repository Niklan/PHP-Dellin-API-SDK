<?php

namespace Niklan\dellin_api\Response;

use GuzzleHttp\Psr7\Response;

/**
 * Define interface for API responses.
 */
interface ResponseInterface {

  /**
   * Gets result converted to an array.
   *
   * @return array
   *   The result.
   */
  public function getResult(): array;

  /**
   * Gets raw results of response.
   *
   * @return mixed
   *   The original contents of response.
   */
  public function getRawResult();

  /**
   * Gets guzzle response.
   *
   * @return \GuzzleHttp\Psr7\Response
   *   The guzzle response.
   */
  public function getResponse(): Response;

  /**
   * Returns if response is success.
   *
   * @return bool
   *   TRUE if response is success, FALSE if has errors or other problems.
   */
  public function isSuccess(): bool;

}
