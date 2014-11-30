<?php

App::uses('AppModel', 'Model');
App::uses('Productitem', 'Model');

class Register extends AppModel {
	// This model uses a database table 'user_avatars'
  public $useTable = 'user_avatars';
  public $name = 'Register';
	public $primaryKey = 'id';


	public $belongsTo = [
	'productitems' => [
		  'className' => 'productitems',
		  'foreignKey' => 'productitem_id'
		]
	];
}
?>
