<?php

namespace Drupal\dellin_api\Auth;

use Drupal\dellin_api\Api\Auth\Login;
use Drupal\dellin_api\Client\HttpClient;
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
  protected $sessionIdStorage;

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
    $this->sessionIdStorage = $storage;

    $this->init();
  }

  protected function init() {
    if ($this->getSessionId()) {
      return $this->getSessionId();
    }

    try {
      $auth = new PublicAuth($this->getAppkey());
      $client = new HttpClient($auth);
      $login = new Login($client);
      $result = $login->execute();
    }
    catch (\Exception $e) {
      // @todo throw new custom exception.
    }
  }

  public function getLogin(): string {
    return $this->login;
  }

  public function getPassword(): string {
    return $this->password;
  }

  public function setSessionId(string $session_id): void {
    $this->sessionIdStorage->set($session_id);
  }

  public function getSessionId(): string {
    return $this->sessionIdStorage->get();
  }

}
