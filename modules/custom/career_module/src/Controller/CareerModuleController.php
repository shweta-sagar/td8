<?php
/**
 * @file
 * @author Shweta Sagar
 * Contains \Drupal\career_module\Controller\ExampleController.
 */
namespace Drupal\career_module\Controller;

/**
 * Provides route responses for the Example module.
 */
class CareerModuleController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function helloPage($name = 'abc') { //default value 
    $element = array(
      '#markup' => 'Hello world! ' . $name, //To display on screen
      // '#markup' => t('Have a nice day'),
    );
    return $element;
  }

  public function happyHours($value = 'test', $id = 1) {
    $element = array(
      '#markup' => $id." is the lucky no for you <strong>".$value."</strong>",
    );
    return $element;
  }

  public function addValue($a = NULL, $b = NULL) {
    $result = $a + $b;
    $element = array(
      '#markup' => $result,
    );
    return $element;
    // return $result;
  }
}