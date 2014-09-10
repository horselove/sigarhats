<?php
/**
*
* Product model
*
**/
	
App::uses('AppModel', 'Model');

class Product extends AppModel 
{
    
	//images rules
    public $actsAs = array(
        'Upload.Upload' => array(
            'resume'
        )
    );

    public $hasMany = array(
        'Product_img' => array(
            'className' => 'Product_img',
            'foreignKey' => 'product_id',
            'conditions' => array(
                'Product_img.src' => 'Product',
            ),
        ),
    );

	public function beforeValidate($options = []) {

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