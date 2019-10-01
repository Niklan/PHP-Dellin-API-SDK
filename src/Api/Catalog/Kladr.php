<?php

namespace Drupal\dellin_api\Api\Catalog;

use Drupal\dellin_api\Api\ApiBase;

/**
 * Defines request to KLADR search API.
 *
 * Usage Example:
 * @code
 * $kladr = new Kladr($client);
 * $kladr->searchByQuery('Пермь', 10);
 * $response = $kldar->execute();
 * @endcode
 *
 * @see https://dev.dellin.ru/api/catalogs/poisk-gorodov/
 */
class Kladr extends ApiBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v2/public/kladr';

  /**
   * The city ID.
   *
   * @var string
   */
  protected $cityId;

  /**
   * The city code.
   *
   * @var string
   */
  protected $code;

  /**
   * Search query.
   *
   * @var string
   */
  protected $q;

  /**
   * The results limit.
   *
   * @var int
   */
  protected $limit;

  /**
   * {@inheritdoc}
   */
  public function getRequestParams(): array {
    if (isset($this->cityId)) {
      return ['cityID' => $this->cityId];
    }
    elseif (isset($this->code)) {
      return ['code' => $this->code];
    }
    elseif (isset($this->q) && isset($this->limit)) {
      return [
        'q' => $this->q,
        'limit' => $this->limit,
      ];
    }
  }

  /**
   * Search in KLADR database by provided query.
   *
   * @param string $query
   *   The search value.
   * @param int $limit
   *   The limit of results. Minimum value is 1.
   */
  public function searchByQuery(string $query, int $limit = 1): void {
    $this->q = $query;
    $this->limit = $limit;
  }

  /**
   * Search in KLADR by city ID.
   *
   * @param string $city_id
   *   The city ID.
   */
  public function searchByCityId(string $city_id): void {
    $this->cityId = $city_id;
  }

  /**
   * Search in KLADR by city code.
   *
   * @param string $code
   *   The city code.
   */
  public function searchByCode(string $code): void {
    $this->code = $code;
  }

}
