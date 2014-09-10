<?php
class Material extends AppModel {

	// image 
    public $actsAs = array(
        'Upload.Upload' => array(
            'img' => array(
                'thumbnailSizes' => array(
                    'thumb' => '500w'
                )
            )
        )
    );

}

?>