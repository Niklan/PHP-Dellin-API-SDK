<?php

namespace Drupal\dellin_api\Session;

/**
 * Defines an interface for storage session ID.
 */
interface StorageInterface {

  /**
   * Saves session ID in storage.
   *
   * @param string $session_id
   *   The session ID.
   */
  public function set(string $session_id): void;

  /**
   * Gets session ID from storage.
   *
   * @return string|null
   *   The session ID, NULL if not store anything.
   */
  public function get(): ?string;

  /**
   * Deletes session ID from storage.
   */
  public function delete(): void;

}
