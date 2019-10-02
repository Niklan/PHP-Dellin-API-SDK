<?php

namespace Drupal\dellin_api\Request\Catalog;

use Drupal\dellin_api\Request\RequestBase;

/**
 * Defines request to KLADR search API.
 *
 * Usage Example:
 *
 * @code
 * $kladr = new Kladr();
 * $kladr->searchByQuery('Пермь', 10);
 * $response = $client->execute($kladr);
 * @endcode
 *
 * @see https://dev.dellin.ru/api/catalogs/poisk-gorodov/
 */
class Kladr extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v2/public/kladr';

  /**
   * Search in KLADR database by provided query.
   *
   * @param string $query
   *   The search value.
   * @param int $limit
   *   The limit of results. Minimum value is 1.
   */
  public function searchByQuery(string $query, int $limit = 1): void {
    $this->requestParams['q'] = $query;
    $this->requestParams['limit'] = $limit;
  }

  /**
   * Search in KLADR by city ID.
   *
   * @param string $city_id
   *   The city ID.
   */
  public function searchByCityId(string $city_id): void {
    $this->requestParams['city_id'] = $city_id;
  }

  /**
   * Search in KLADR by city code.
   *
   * @param string $code
   *   The city code.
   */
  public function searchByCode(string $code): void {
    $this->requestParams['code'] = $code;
  }

}
