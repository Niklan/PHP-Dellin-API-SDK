<?php

namespace Drupal\dellin_api\Request\Catalog;

use Drupal\dellin_api\Request\RequestBase;

/**
 * Provides request for list of available payment types.
 *
 * @see https://dev.dellin.ru/api/catalogs/request_info/
 */
class PaymentTypes extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/payment_types';

}
