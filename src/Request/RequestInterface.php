<?php

namespace Niklan\dellin_api\Request;

/**
 * Defines interface for API requests wrapper objects.
 */
interface RequestInterface {

  /**
   * Gets request params.
   *
   * @return array
   *   The request params.
   */
  public function getRequestParams(): array;

  /**
   * Gets API request endpoint.
   *
   * @return string
   *   The request endpoint URI.
   */
  public function getEndpoint(): string;

}
