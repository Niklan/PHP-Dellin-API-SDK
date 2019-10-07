<?php

namespace Niklan\DellinApi\Client;

use Niklan\DellinApi\Auth\AuthInterface;

/**
 * Defines base client.
 */
abstract class ClientBase implements ClientInterface {

  /**
   * The client authentication credits.
   *
   * @var \Niklan\DellinApi\Auth\AuthInterface
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
   * @param \Niklan\DellinApi\Auth\AuthInterface $auth
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
