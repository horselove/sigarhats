<?php


class Productitem extends AppModel {
  public $name = 'Productitem';
	public $primaryKey = 'id';

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
	  ],
	  'user_avatars' => [
	  	'className' => 'user_avatars',
	  	'foreignKey' => 'productitem_id'
	  ]
	];
	public $hasMany = [
	 'user_avatars' => [
	  	'className' => 'user_avatars',
	  	'foreignKey' => 'productitem_id'
	  ]
	];
        
        public function getByNecklable($necklableId)
        {
            return $this->query('SELECT * FROM productitems WHERE necklable_id="'.$necklableId.'" LIMIT 1');
        }


}

