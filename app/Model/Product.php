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

		return parent::beforeValidate($options);
	}


	public $belongsTo = [
		'concepts' => [
			'className' => 'concepts',
			'foreignKey' => 'concept_id',
                    'order'=>'Product.featured DESC,Product.id DESC'
		],
		'collections' => [
			'className' => 'collections',
			'foreignKey' => 'collection_id'
		]
	];
	public $hasMany = [
		'productitems' => [
			'claseName' => 'productitems',
			'foreignKey' => 'product_id',
                    'alias'=>'Productitem'
		],
		'images' => [
			'classname' => 'images',
			'foreignKey' => 'product_id'
		]
	];

	public $hasAndBelongsToMany = [
		'resellers' => [
			'className' => 'resellers',
			'joinTable' => 'productitems'
		],
		'size' => [
			'className' => 'sizes',
			'joinTable' => 'productitems'
		],
	];
}
