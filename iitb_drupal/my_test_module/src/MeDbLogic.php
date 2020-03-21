<?php	  
	namespace Drupal\mymodule;

	use Drupal\Core\Database\Connection;

	/**
	* Defines a storage handler class that handles the node grants system.
	* This is used to build node query access.	
	* @ingroup mypage
	*/

	class MyModuleDbLogic {

	 /**
	  * The database connection.
	  * @var \Drupal\Core\Database\Connection
	  */

	 protected $database;  
	 /**
	  * Constructs a MyPageDbLogic object.	  
	  * @param \Drupal\Core\Database\Connection $database
	  *   The database connection.
	  */

	 // The $database variable came to us from the service argument.
	 public function __construct(Connection $database) {
	   $this->database = $database;
	 }	  

	 /**
	  * Add new record in table mymodule.
	  */

	 public function add($name, $commit, $inbox) {
	   if (empty($name) || empty($commit) || empty($inbox)) {
	    return FALSE;
	   }

	 // Example of working with DB in Drupal 8.

	   $query = $this->database->insert('memodule');
	   $query->fields(array(
	    'name' => $name,
	    'commit' => $commit,
        'inbox' => $inbox,
	   ));

	   return $query->execute();
	 }
	  

	 /**
	  * Get all records from table mymodule.
	  */

	 public function getAll() {
	   return $this->getById();
	 }
	  

	 /**
	  * Get records by id from table mymodule.
	  */

	 public function getById($name = NULL, $reset = FALSE) {
	   $query = $this->database->select('memodule');
	   $query->fields('memodule', array('name', 'commit', 'inbox'));
	   if ($name) {
	    $query->condition('name', $name);
	   }
	   $result = $query->execute()->fetchAll();

	   if (count($result)) {
	    if ($reset) {
	    $result = reset($result);
	    }
	    return $result;
	   }
	   return FALSE;
	 }
	}