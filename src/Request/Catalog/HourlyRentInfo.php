<?php

namespace Niklan\DellinApi\Request\Catalog;

use Niklan\DellinApi\Request\RequestBase;

/**
 * Provides list of information for hourly rent info.
 *
 * @see https://dev.dellin.ru/api/catalogs/request_info/
 */
class HourlyRentInfo extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/hourly_rent_info';

}
