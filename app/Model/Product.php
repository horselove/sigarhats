<?php
/**
*
* Product model
*
**/

App::uses('AppModel', 'Model');

class Product extends AppModel
{
//beforeValidate
	public function beforeValidate($options = []) {

		return parent::beforeValidate($options);
	}

	public $belongsTo = [
		'concepts' => [
			'className' => 'concepts',
			'foreignKey' => 'concept_id'
		],
		'collections' => [
			'className' => 'collections',
			'foreignKey' => 'concept_id'
		],
		'images' => [
			'classname' => 'images',
			'foreignKey' => 'id'
		]
	];
	public $hasMany = [
		'productitems' => [
			'claseName' => 'productitems',
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
