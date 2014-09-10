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
                'Product_img.product_id' => 'Product',
            ),
        ),
    );
  public function createWithAttachments($data) {
    // Sanitize your images before adding them
    $images = array();
    if (!empty($data['src'][0])) {
        foreach ($data['src'] as $i => $image) {
            if (is_array($data['src'][$i])) {
                // Force setting the `model` field to this model
                $image['model'] = 'Product';

                // Unset the foreign_key if the user tries to specify it
                if (isset($image['product_id'])) {
                    unset($image['product_id']);
                }

                $images[] = $image;
            }
        }
    }
    $data['src'] = $images;

    // Try to save the data using Model::saveAll()
    $this->create();
    if ($this->saveAll($data)) {
        return true;
    }

    // Throw an exception for the controller
      throw new Exception(__("This post could not be saved. Please try again"));
  }


//beforeValidate
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
