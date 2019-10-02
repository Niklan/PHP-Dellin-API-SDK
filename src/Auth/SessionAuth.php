<?php

namespace Drupal\dellin_api\Auth;

/**
 * Provides authentication method using appkey and session ID.
 *
 * This is client authentication used where Public auth is not enough.
 *
 * @see https://dev.dellin.ru/api/auth/login/
 */
final class SessionAuth extends AuthBase {

  /**
   * The session ID.
   *
   * @var string
   */
  protected $sessionId;

  /**
   * Constructs a new KeyLoginPassword object.
   *
   * @param string $appkey
   *   The app key.
   * @param string $session_id
   *   The session ID.
   */
  public function __construct(string $appkey, string $session_id) {
    $this->appkey = $appkey;
    $this->sessionId = $session_id;
  }

  /**
   * {@inheritdoc}
   */
  public function getRequestParams(): array {
    return [
      'appkey' => $this->getAppkey(),
      'sessionID' => $this->getSessionId(),
    ];
  }

  /**
   * Gets session ID.
   *
   * @return string
   *   The session ID.
   */
  public function getSessionId(): string {
    return $this->sessionId;
  }

}
