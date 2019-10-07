<?php

namespace Niklan\dellin_api\Request\Catalog;

use Niklan\dellin_api\Request\RequestBase;

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
