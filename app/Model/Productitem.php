<?php

class Productitem extends AppModel {

	public $belongsTo = [
	'sizes' => [
		  'className' => 'sizes',
		  'foreignKey' => 'size_id'
		],
	  'product' => [
	  	'className' => 'products',
	  	'foreignKey' => 'product_id'
	  ],
	  'reseller' => [
	  	'className' => 'reseller',
	  	'foreignKey' => 'reseller_id'
	  ]
	];


}

