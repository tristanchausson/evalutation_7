<?php

namespace Drupal\evalcms_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class BlogController.
 */
class BlogController extends ControllerBase {

  /**
   * Blog.
   *
   * @return string
   *   Return markup array.
   */
  public function blog($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Bienvenue sur le blog'),
    ];
  }

}
