<?php

namespace Drupal\dellin_api\Session;

use Drupal\Core\State\StateInterface;

/**
 * Defines object to store session ID in Drupal State storage.
 */
class StateStorage extends StorageBase {

  /**
   * The storage key.
   *
   * @var string
   */
  const STORAGE_KEY = 'dellin_api.session_storage';

  /**
   * The state.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * Constructs a new StateStorage object.
   *
   * @param \Drupal\Core\State\StateInterface $state
   *   The state.
   */
  public function __construct(StateInterface $state) {
    $this->state = $state;
  }

  /**
   * {@inheritdoc}
   */
  public function set(string $session_id): void {
    $this->state->set(self::STORAGE_KEY, $session_id);
  }

  /**
   * {@inheritdoc}
   */
  public function get(): ?string {
    return $this->state->get(self::STORAGE_KEY, NULL);
  }

  /**
   * {@inheritdoc}
   */
  public function delete(): void {
    $this->state->delete(self::STORAGE_KEY);
  }

}
