<?php

namespace Niklan\DellinApi\Request\Catalog;

use Niklan\DellinApi\Request\RequestBase;

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
