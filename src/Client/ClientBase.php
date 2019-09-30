<?php

namespace Drupal\dellin_api\Client;

use Drupal\dellin_api\Auth\AuthInterface;

/**
 * Defines base client.
 */
abstract class ClientBase implements ClientInterface {

  /**
   * The client authentication credits.
   *
   * @var \Drupal\dellin_api\Auth\AuthInterface
   */
  protected $auth;

  /**
   * The format of request and response by an API.
   *
   * Available values: 'json' and 'xml'.
   *
   * @var string
   */
  protected $format;

  /**
   * Constructs a new ClientBase object.
   *
   * @param \Drupal\dellin_api\Auth\AuthInterface $auth
   *   The authentication credits.
   * @param string $format
   *   The format used for requests and responses by API.
   */
  public function __construct(AuthInterface $auth, string $format = 'json') {
    $this->auth = $auth;
    $this->format = $format;
  }

  /**
   * {@inheritdoc}
   */
  public function getAuth(): AuthInterface {
    return $this->auth;
  }

}
