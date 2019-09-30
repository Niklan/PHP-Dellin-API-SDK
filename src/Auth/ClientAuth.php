<?php

namespace Drupal\dellin_api\Auth;

use Drupal\dellin_api\Session\MemoryStorage;
use Drupal\dellin_api\Session\StorageInterface;
use Drupal\delling_api\Auth\AuthBase;

/**
 * Provides authentication method using appkey, login and password.
 *
 * This is client authentication used where Public auth is not enough.
 *
 * @see https://dev.dellin.ru/api/auth/login/
 */
final class ClientAuth extends AuthBase {

  /**
   * The login.
   *
   * @var string
   */
  protected $login;

  /**
   * The password.
   *
   * @var string
   */
  protected $password;

  /**
   * The session ID storage.
   *
   * @var \Drupal\dellin_api\Session\StorageInterface
   */
  protected $storage;

  /**
   * Constructs a new KeyLoginPassword object.
   *
   * @param string $appkey
   *   The app key.
   * @param string $login
   *   The login.
   * @param string $password
   *   The password.
   * @param \Drupal\dellin_api\Session\StorageInterface $storage
   *   The session ID storage.
   */
  public function __construct(string $appkey, string $login, string $password, StorageInterface $storage = NULL) {
    $this->appkey = $appkey;
    $this->login = $login;
    $this->password = $password;

    if (!$storage instanceof StorageInterface) {
      $storage = new MemoryStorage();
    }
    $this->storage = $storage;
  }

  public function getSessionId(): string {

  }

}
