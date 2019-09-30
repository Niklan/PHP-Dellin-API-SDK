<?php

namespace Drupal\dellin_api\Session;

/**
 * Defines session storage in memory.
 *
 * This is very simple storage for session ID. It stores result in memory. It
 * will only consistent per request. It's not recommended to use it, because it
 * will increase the request amount over time.
 */
class MemoryStorage extends StorageBase {

  /**
   * The session ID.
   *
   * @var string|null
   */
  protected $sessionId = NULL;

  /**
   * {@inheritdoc}
   */
  public function set(string $session_id): void {
    $this->sessionId = $session_id;
  }

  /**
   * {@inheritdoc}
   */
  public function get(): ?string {
    return $this->sessionId;
  }

  /**
   * {@inheritdoc}
   */
  public function delete(): void {
    $this->sessionId = NULL;
  }

}
