<?php

/**
 *
 * Product controller
 *
**/

App::uses('AppController', 'Controller');

class ProductsController extends AppController 
{
		//public $name 	= 'Products'; //pluralization of the Model
		public $helpers = array('Html', 'form'); //include additional helpers using the global $helpers


		//Shows all products
	
		public function beforeFilter() {
			$this->Crud->on('beforePaginate', array($this, '_productCallback'));

			parent::beforeFilter();
		}

		public function _productCallback(CakeEvent $event) {
			$event->subject->paginator->settings;
			//debug($event->subject->paginator->settings);
		}

		public function index() {
			return $this->Crud->execute();
		}

		public function view($id = null) {
			$this->Crud->on('beforeFind', function (CakeEvent $event) {
				$event->subject->query['contain']['user_avatar'] = [];
				$event->subject->query['contain']['product_imgs'] = [];
				$event->subject->query['contain']['concept'] = [];
				$event->subject->query['contain']['size'] = [];
			});

			$this->set('title_for_layout', 'View Product');
	        
	        if (!$id) {
	            throw new NotFoundException(__('Invalid product'));
	        }
	      
	        return $this->Crud->execute();
		}

/**
*	Admin 
*
*/		
	public function admin_index() {
	
		$this->Crud->on('beforeFind', function (CakeEvent $event) {
				$event->subject->query['contain']['user_avatar'] = [];
				$event->subject->query['contain']['product_imgs'] = [];
				$event->subject->query['contain']['concept'] = [];
				$event->subject->query['contain']['size'] = [];
		});

	return $this->Crud->execute();

	}
	
	public function add(){
		

	}
	
	public function edit($id = null){

	}

}
