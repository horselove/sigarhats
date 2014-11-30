<?php

class RegistersController extends AppController {


public function index() {
	$this->Crud->on('beforePaginate', function(CakeEvent $event) {
	  if ($this->request->is('post') && !empty($this->request->data['Register']['necklabel_id'])) {
      $searchTerm = '%' . $this->request->data['Register']['necklabel_id'] . '%';
      $this->Paginator->settings['conditions']['OR'] = [
          'productitems.necklabel_id LIKE' => $searchTerm,
      ];
  		parent::beforeFilter();
 		}
	});

		return $this->Crud->execute();
	}

public function add() {
	}


}
