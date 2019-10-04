<?php

namespace Drupal\dellin_api\Request\Catalog;

use Drupal\dellin_api\Request\RequestBase;

/**
 * Provides request for list of available packages.
 *
 * @see https://dev.dellin.ru/api/catalogs/request_info/
 */
class Packages extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/packages';

}
