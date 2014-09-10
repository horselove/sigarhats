<?php 
class Product_img extends AppModel {
    public $actsAs = array(
        'Upload.Upload' => array(
            'product_img' => array(
                'thumbnailSizes' => array(
                    'thumb' => '600w',
                ),
            ),
        ),
    );

    public $belongsTo = array(
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
        )
    );
}
?>