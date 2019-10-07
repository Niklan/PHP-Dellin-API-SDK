<?php

namespace Niklan\DellinApi\Request\Catalog;

use Niklan\DellinApi\Request\RequestBase;

/**
 * Provides request for list of available load params.
 *
 * @see https://dev.dellin.ru/api/catalogs/request_info/
 */
class LoadParams extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/load_params';

}
