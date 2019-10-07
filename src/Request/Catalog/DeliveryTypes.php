<?php

namespace Niklan\dellin_api\Request\Catalog;

use Niklan\dellin_api\Request\RequestBase;

/**
 * Provides request for list of delivery types.
 *
 * @see https://dev.dellin.ru/api/catalogs/request_info/
 */
class DeliveryTypes extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/request_delivery_types';

}
