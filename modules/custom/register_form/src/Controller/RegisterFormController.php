<?php

namespace Drupal\register_form\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class RegisterFormController extends ControllerBase {
  // public function content() {
 
 public function RegData($name) {
  
    $theme = array(
        '#theme' => 'hello_page',
        '#name_shweta' => array('aa' => $name, 'sss' => 'test'),
      );
    return $theme;
   }

 public function BooksData() {
    $theme = array(
      '#theme' = 'books_edition'
      
      );

 }

}