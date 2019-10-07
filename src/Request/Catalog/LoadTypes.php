<?php

namespace Niklan\dellin_api\Request\Catalog;

use Niklan\dellin_api\Request\RequestBase;

/**
 * Provides request for list of loading types.
 *
 * @see https://dev.dellin.ru/api/catalogs/request_info/
 */
class LoadTypes extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/load_types';

}
