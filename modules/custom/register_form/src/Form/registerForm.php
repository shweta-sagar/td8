<?php
namespace Drupal\register_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Drupal\register_form\src\Controller\registerFormController;


class registerForm extends FormBase
{
  public function getFormId()
  {
    return 'reg_form';
  }
  public function buildForm(array $form, FormStateInterface $form_state, $id = NULL) {

    if (!empty($id)) {
      $fbd = new FormBaseData('register_form', $id);
      $fbd->getFormState($form_state);
    }
    $form['firstname'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('User First Name'),
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
      '#weight' => 1,
      '#default_value' => (!empty($form_state->getValue('firstname'))) ? $form_state->getValue('firstname') : '',
    );
    $form['lastname'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('User Last Name'),
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => FALSE,
      '#weight' => 2,
      '#default_value' => (!empty($form_state->getValue('lastname'))) ? $form_state->getValue('lastname') : '',
    );
    $form['gender'] = array(
      '#title' => $this->t('Select your Gender: '),
      '#type' => 'radios',      
      '#options' => array('male' => $this->t('Male'), 'female' => $this->t('Female')),
      '#weight' => 3,
      '#default_value' => (!empty($form_state->getValue('gender'))) ? $form_state->getValue('gender') : '',
    );
    $form['email'] = array(
      '#type' => 'email',
      '#title' => $this->t('Enter email '),
      '#weight' => 4,
      '#default_value' => (!empty($form_state->getValue('email'))) ? $form_state->getValue('email') : '',
    );
    $form['_mode'] = array(
      '#type' => 'value',
      '#weight' => 4,
      '#default_value' => (!empty($id)) ? TRUE : FALSE,
    );
    $form['reg_id'] = array(
      '#type' => 'value',
      '#weight' => 4,
      '#default_value' => (!empty($id)) ? $id : NULL,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#weight' => 5,
    );

    // $form['State'] = array(
    //  '#type' => 'dropbutton',
    //  '#links' => array(
    //    '#Delhi' => array(
    //      '#title' => $this->t('Delhi'),  
    //      ),
    //    '#Punjab' => array(
    //      '#title' => $this->t('Punjab'), 
    //      ),
    //    '#Goa' => array(
    //      '#title' => $this->t('Goa'),  
    //      ),
        
    //    ),

    //  );



    return $form;
  }
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $form_values = $form_state->getValues();
      if (empty($form_values['firstname'])) 
      {
          $form_state->setErrorByName('firstname', t('Please fill description!!'));
      }
  }
  public function submitForm(array &$form, FormStateInterface $form_state) {
      foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
      }
      $fields = array(
        'Fname' => $form_state->getValue('firstname'),
        'Lname' => $form_state->getValue('lastname'),
        'Gender' => $form_state->getValue('gender'),
        'Email' => $form_state->getValue('email'),
      );
// print_r($fields);
// print_r($form_state->getValue());
// die();
      if (!empty($form_state->getValue('_mode'))) {
        db_update('register_form')->fields($fields)->condition('id', $form_state->getValue('reg_id'))
        ->execute();
      }
      else {
        db_insert('register_form')->fields($fields)->execute();
      }
      
    }
}

class FormBaseData{
  public $table;
  public $id;

  public function __construct($table = 'register_form', $id = NULL) {
    $this->table = $table;
    if (!empty($id)) {
      $this->id = $id;
    }
  }
  public function getFormState(FormStateInterface $form_state) {
    $a = db_select($this->table, 't')
      ->fields('t')
      ->condition('id', $this->id)
      ->execute()
      ->fetchObject();
    
    $form_state->setValues(array('firstname' => $a->Fname, 'lastname' => $a->Lname, 'gender' => $a->Gender, 'email' => $a->Email));
  }
}
