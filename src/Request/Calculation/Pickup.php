<?php

namespace Drupal\dellin_api\Request\Calculation;

use Drupal\dellin_api\Request\RequestBase;

/**
 * Defines pickup API request.
 *
 * An example of simple usage with minimum required values:
 *
 * @code
 * $pickup = new Pickup('5900000100000000000000000',
 *   '7700000000000000000000000', 3, 4.5);
 * $result = $client->execute($pickup);
 * @endcode
 *
 * @see https://dev.dellin.ru/api/calculation/pickup/
 */
class Pickup extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/calculator';

  /**
   * Constructs a new Pickup object.
   *
   * @param string $derival_point
   *   The destination KLADR code.
   * @param string $arrival_point
   *   The arrival KLADR code.
   * @param float $sized_volume
   *   The volume in m3.
   * @param float $sized_weight
   *   The weight in kg's.
   */
  public function __construct(string $derival_point, string $arrival_point, float $sized_volume, float $sized_weight) {
    $this->requestParams['derivalPoint'] = $derival_point;
    $this->requestParams['arrivalPoint'] = $arrival_point;
    $this->requestParams['sizedVolume'] = $sized_volume;
    $this->requestParams['sizedWeight'] = $sized_weight;
  }

  /**
   * Sets derival door status.
   *
   * @param bool $derival_door
   *   The derival door status.
   *
   * @return $this
   */
  public function setDerivalDoor(bool $derival_door): Pickup {
    $this->requestParams['derivalDoor'] = $derival_door;

    return $this;
  }

  /**
   * Sets outsized cargo volume.
   *
   * @param float $oversized_volume
   *   The outsized cargo volume m3.
   *
   * @return $this
   */
  public function setOversizedVolume(float $oversized_volume): Pickup {
    $this->requestParams['oversizedVolume'] = $oversized_volume;

    return $this;
  }

  /**
   * Sets oversized weight.
   *
   * @param float $oversized_weight
   *   The oversized cargo weight, kg.
   *
   * @return $this
   */
  public function setOversizedWeight(float $oversized_weight): Pickup {
    $this->requestParams['oversizedWeight'] = $oversized_weight;

    return $this;
  }

  /**
   * Sets cargo length.
   *
   * @param float $length
   *   The cargo length.
   *
   * @return $this
   */
  public function setLength(float $length): Pickup {
    $this->requestParams['length'] = $length;

    return $this;
  }

  /**
   * Sets cargo width.
   *
   * @param float $width
   *   The widest with.
   *
   * @return $this
   */
  public function setWidth(float $width): Pickup {
    $this->requestParams['width'] = $width;

    return $this;
  }

  /**
   * Sets height.
   *
   * @param float $height
   *   The height of the highest place.
   *
   * @return $this
   */
  public function setHeight(float $height): Pickup {
    $this->requestParams['height'] = $height;

    return $this;
  }

  /**
   * Sets freight type UID.
   *
   * @param string $freight_uid
   *   The cargo type UID.
   *
   * @return $this
   */
  public function setFreightUid(string $freight_uid): Pickup {
    $this->requestParams['freightUid'] = $freight_uid;

    return $this;
  }

  /**
   * Sets stated value.
   *
   * @param float $stated_value
   *   The stated value of cargo in rubles.
   *
   * @return $this
   */
  public function setStatedValue(float $stated_value): Pickup {
    $this->requestParams['statedValue'] = $stated_value;

    return $this;
  }

  /**
   * Sets the list of needed packages.
   *
   * @param string[] $packages
   *   The list packages ID needed for cargo.
   *
   * @return $this
   */
  public function setPackages(array $packages): Pickup {
    $this->requestParams['packages'] = $packages;

    return $this;
  }

  /**
   * Sets derival services.
   *
   * @param string[] $derival_services
   *   The list of derival service ID's.
   *
   * @return $this
   */
  public function setDerivalServices(array $derival_services): Pickup {
    $this->requestParams['derivalServices'] = $derival_services;

    return $this;
  }

  /**
   * Sets arrival services.
   *
   * @param string[] $arrival_services
   *   The list of arrival service ID's.
   *
   * @return $this
   */
  public function setArrivalServices(array $arrival_services): Pickup {
    $this->requestParams['arrivalServices'] = $arrival_services;

    return $this;
  }

  /**
   * Sets document services.
   *
   * @param string[] $document_services
   *   The list of ID's with document services.
   *
   * @return $this
   */
  public function setDocumentServices(array $document_services): Pickup {
    $this->requestParams['documentServices'] = $document_services;

    return $this;
  }

  /**
   * Sets derival loading.
   *
   * @param array[] $derival_loading
   *   The derival loading information.
   *
   * @return $this
   */
  public function setDerivalLoading(array $derival_loading): Pickup {
    $this->requestParams['derivalLoading'] = $derival_loading;

    return $this;
  }

  /**
   * Sets arrival unloading.
   *
   * @param array[] $arrival_unloading
   *   The arrival unloading information.
   *
   * @return $this
   */
  public function setArrivalUnLoading(array $arrival_unloading): Pickup {
    $this->requestParams['arrivalUnLoading'] = $arrival_unloading;

    return $this;
  }

  /**
   * Sets amount fo space for cargo.
   *
   * @param int $quantity
   *   The quantity.
   *
   * @return $this
   */
  public function setQuantity(int $quantity): Pickup {
    $this->requestParams['quantity'] = $quantity;

    return $this;
  }

  /**
   * Sets derival fixed time visit.
   *
   * @param bool $derival_fixed_time_visit
   *   The fixed time visit status.
   *
   * @return $this
   */
  public function setDerivalFixedTimeVisit(bool $derival_fixed_time_visit): Pickup {
    $this->requestParams['derivalFixedTimeVisit'] = $derival_fixed_time_visit;

    return $this;
  }

  /**
   * Sets derival period visit.
   *
   * @param string $start
   *   The beginning of the period of taking the shipment.
   * @param string $end
   *   The end of the period of taking the shipment.
   *
   * @return $this
   */
  public function setDerivalPeriodVisit(string $start, string $end): Pickup {
    $this->requestParams['derivalPeriodVisit'] = [
      'start' => $start,
      'end' => $end,
    ];

    return $this;
  }

  /**
   * Sets arrival fixed time visit status.
   *
   * @param bool $arrival_fixed_time_visit
   *   The arrival fixed time visit status.
   *
   * @return $this
   */
  public function setArrivalFixedTimeVisit(bool $arrival_fixed_time_visit): Pickup {
    $this->requestParams['arrivalFixedTimeVisit'] = $arrival_fixed_time_visit;

    return $this;
  }

  /**
   * Sets arrival period visit.
   *
   * @param string $start
   *   The beginning of the period of delivering the shipment.
   * @param string $end
   *   The end of the period of delivering the shipment.
   *
   * @return $this
   */
  public function setArrivalPeriodVisit(string $start, string $end): Pickup {
    $this->requestParams['arrivalPeriodVisit'] = [
      'start' => $start,
      'end' => $end,
    ];

    return $this;
  }

  /**
   * Sets calculate date.
   *
   * @param string $calculate_date
   *   The calculate date.
   *
   * @return $this
   */
  public function setCalculateDate(string $calculate_date): Pickup {
    $this->requestParams['calculateDate'] = $calculate_date;

    return $this;
  }

  /**
   * Sets counterparty UID.
   *
   * @param string $cauid
   *   The counterparty UID.
   *
   * @return $this
   */
  public function setCauid(string $cauid): Pickup {
    $this->requestParams['cauid'] = $cauid;

    return $this;
  }

  /**
   * Sets requester.
   *
   * @param int $requester
   *   The requester value.
   *
   * @return $this
   */
  public function setRequester(int $requester): Pickup {
    $this->requestParams['requester'] = $requester;

    return $this;
  }

  /**
   * Sets packages count.
   *
   * @param int $packages_count
   *   The count of packages.
   *
   * @return $this
   */
  public function setPackagesCount(int $packages_count): Pickup {
    $this->requestParams['packagesCount'] = $packages_count;

    return $this;
  }

  /**
   * Sets bags count.
   *
   * @param int $bags_count
   *   The bags count.
   *
   * @return $this
   */
  public function setBagsCount(int $bags_count): Pickup {
    $this->requestParams['bagsCount'] = $bags_count;

    return $this;
  }

  /**
   * Sets term insurance.
   *
   * @param bool $term_insurance
   *   The term insurance status.
   *
   * @return $this
   */
  public function setTermInsurance(bool $term_insurance): Pickup {
    $this->requestParams['termInsurance'] = $term_insurance;

    return $this;
  }

}
