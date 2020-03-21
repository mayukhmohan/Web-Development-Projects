<?php
	namespace Drupal\mymodule\Form;
	use Drupal\Core\Form\ConfigFormBase;
	use Drupal\Core\Form\FormStateInterface;
	use Drupal\Core\Url;
	use Drupal\Component\Utility\SafeMarkup;	  

	class ConfigFormMyModule extends ConfigFormBase {	 
	 // Method that renders form id.
	 public function getFormId() {
	   return 'configform_mymodule_form';
	 }

	 // Instead of hook_form.

	 public function buildForm(array $form, FormStateInterface $form_state) {

	   //$form = parent::buildForm($form, $form_state);
	   $config = $this->config('configform_mymodule.settings');

	   /*$form['email'] = array(
	    '#type' => 'email',
	    '#title' => $this->t('Your .com email address.'),
	    '#default_value' => $config->get('email_address'),
	   );

	   $form['title'] = array(
	    '#type' => 'textfield',
	    '#title' => $this->t('Title'),
	    '#required' => TRUE,
	   );

	   $form['body'] = array(
	    '#type' => 'textarea',
	    '#title' => $this->t('Body'),
	    '#rows' => 5,
	    '#required' => TRUE,
	   );*/

	   $db_logic = \Drupal::service('memodule.db_logic');

	   $data = $db_logic->getAll();

	   if ($data) {

	    $form['data'] = array(
	    '#type' => 'table',
	    '#caption' => $this->t('Table Data'),
	    '#header' => array($this->t('name'), $this->t('commit'), $this->t('inbox')),
	    );

	    foreach ($data as $item) {

	    // Example of link creation.
	    // The first argument is route name, the second argument are its parameters

	    $url = Url::fromRoute('mymodule.view', array(

	        'mymodule_id' => $item->id,

	    ));

	    $form['data'][] = array(

	        'id' => array(
	        '#type' => 'markup',
	        '#markup' => \Drupal::l($item->id, $url),
	        ),

	        'title' => array(
	        '#type' => 'markup',
	        '#markup' => $item->title,
	        ),

	        'body' => array(
	        '#type' => 'markup',
	        '#markup' => $item->body,
	        ),

	    );
	    }
	   }
	   return $form;
	 }  


	 // Instead of hook_form_validate.

	 public function validateForm(array &$form, FormStateInterface $form_state) {

	   if (strpos($form_state->getValue('email'), '.com') === FALSE) {
	    $form_state->setErrorByName('email', $this->t('This is not a .com email address.'));
	   }
	 }  


	 // Instead of hook_form_submit.

	 public function submitForm(array &$form, FormStateInterface $form_state) {

	   $db_logic = \Drupal::service('mymodule.db_logic');

	   $title = SafeMarkup::checkPlain($form_state->getValue('title'));
	   $body = SafeMarkup::checkPlain($form_state->getValue('body'));

	  
	   $db_logic->add($title, $body);
	   // Instead of variable_set/get we have config.
	   // Example of working with them.
	   $config = $this->config('configform_mymodule.settings');
	   $config->set('email_address', $form_state->getValue('email'));
	   $config->save();
	   return parent::submitForm($form, $form_state);

	 }	  

	 // An array of names of configuration objects that are available for editing.

	 protected function getEditableConfigNames() {
	   return ['configform_mymodule.settings'];
	 }	  
	}