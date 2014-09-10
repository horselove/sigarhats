<?php 
class Product_img extends AppModel {
    public $actsAs = array(
        'Upload.Upload' => array(
            'attachment' => array(
                'thumbnailSizes' => array(
                    'thumb' => '600w',
                ),
            ),
        ),
    );

    public $belongsTo = array(
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'foreign_key',
        )
    );
}
?>