<?php
/**
*
* Product model
*
**/
	
App::uses('AppModel', 'Model');

class Product extends AppModel 
{


	public function beforeValidate($options = []) {

		// Prepare data form <select multiple> to be saved hasMany relations
		//change the values
		if (!empty($this->data['size']['id'])) {
			$this->data['size'] = array_map(function ($id) {
				return ['id' => $id];
			}, $this->data['size']['id']);
		}

		return parent::beforeValidate($options);
	} 	

	public $belongsTo = [
		'sizes' => [
			'className' => 'sizes',
			'foreignKey' => 'size_id'
		],
		'concepts' => [
			'className' => 'concepts',
			'foreignKey' => 'concept_id'
		],
		'collections' => [
			'className' => 'collections',
			'foreignKey' => 'concept_id'
		],
		'user_avatars' => [
			'className' => 'user_avatars',
			//'type' => 'INNER',
			'fields' => 'user_avatars.product_id',
			'foreignKey' => 'id'
		]		
	];

}