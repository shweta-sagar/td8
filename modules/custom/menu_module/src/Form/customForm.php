<?php

namespace Drupal\menu_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class customForm extends FormBase {
  public function getFormId() {
    return 'my_first_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#required' => TRUE,
    );
    $form['develop'] = array(
      '#type' => 'checkbox',
      '#title' => t('I would like to be involved in developing this material'),
    );
    $form['description'] = array(
      '#type' => 'textarea',
      '#title' => t('Description'),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }

  

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $form_values = $form_state->getValues();
    if (empty($form_values['description'])) {
      $form_state->setErrorByName('description', t('Please fill description!!'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }
  }
}