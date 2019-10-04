<?php

namespace Drupal\dellin_api\Request\Catalog;

use Drupal\dellin_api\Request\RequestBase;

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
