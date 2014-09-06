<?php
class Material extends AppModel {
	// image 

    public $actsAs = [
        'Upload.Upload' => [

            'img' => [
                'fields' => [
                    'dir' => 'img_dir'
                ]
            ],
                'thumbnailSizes' => [
                    'xvga' => '1024w',
                    'vga' => '640w',
                    'thumb' => '80w'
                ],
                    'thumbnailMethod' => 'php'
        ]
    ];
}
?>