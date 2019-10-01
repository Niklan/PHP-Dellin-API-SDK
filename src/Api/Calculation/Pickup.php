<?php

namespace Drupal\dellin_api\Api\Calculation;

use Drupal\dellin_api\Api\ApiBase;
use Drupal\dellin_api\Client\ClientInterface;

/**
 * Defines pickup API request.
 *
 * An example of simple usage with minimum required values:
 * @code
 * $pickup = new Pickup($client, '5900000100000000000000000', '7700000000000000000000000', 3, 4.5);
 * $result = $pickup->execute();
 * @endcode
 *
 * @see https://dev.dellin.ru/api/calculation/pickup/
 */
class Pickup extends ApiBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/calculator';

  /**
   * The destination KLADR code.
   *
   * @var string
   */
  protected $derivalPoint;

  /**
   * The arrival KLADR code.
   *
   * @var string
   */
  protected $arrivalPoint;

  /**
   * The package volume in m3.
   *
   * @var float
   */
  protected $sizedVolume;

  /**
   * The package weight in kg.
   *
   * @var float
   */
  protected $sizedWeight;

  /**
   * Constructs a new Pickup object.
   *
   * @param \Drupal\dellin_api\Client\ClientInterface $client
   *   The API client.
   * @param string $derival_point
   *   The destination KLADR code.
   * @param string $arrival_point
   *   The arrival KLADR code.
   * @param float $sized_volume
   *   The volume in m3.
   * @param float $sized_weight
   *   The weight in kg's.
   */
  public function __construct(ClientInterface $client, string $derival_point, string $arrival_point, float $sized_volume, float $sized_weight) {
    parent::__construct($client);

    $this->derivalPoint = $derival_point;
    $this->arrivalPoint = $arrival_point;
    $this->sizedVolume = $sized_volume;
    $this->sizedWeight = $sized_weight;
  }

  /**
   * {@inheritdoc}
   */
  public function getRequestParams(): array {
    $params = [
      'derivalPoint' => $this->derivalPoint,
      'arrivalPoint' => $this->arrivalPoint,
      'sizedVolume' => $this->sizedVolume,
      'sizedWeight' => $this->sizedWeight,
    ];

    return $params;
  }

}
