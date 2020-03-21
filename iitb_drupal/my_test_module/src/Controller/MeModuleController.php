<?php
namespace Drupal\mymodule\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class MeModuleController extends ControllerBase {
 // The name of the variable is the same as in the route!!!
 public function content($mymodule_id = NULL) {
   // Service loading.
   $db_logic = \Drupal::service('mymodule.db_logic');

   if ($record = $db_logic->getById($mymodule_id, TRUE)){
    return array(
    // Working with our theme.
    '#theme' => 'mymodule_theme',
    '#data' => $record,
    );
   }

   // Will render: page not found.
   throw new NotFoundHttpException();
 }
}