<?php
App::uses('AppHelper', 'View/Helper');

class ImageHelper extends AppHelper {
    public function ImageEdit($count, query) {
    	$count++;

  	  String::highlight(
      $story['Story']['story'],
      'IMAGE1',
      ['format' => $this->Html->image('story/1.jpg',
      ['alt' => 'Story of sigar hats & caps'] ) ]);

    	public $helpers = array('Link');

    }
}
