<?php

/**
 *
 * Product controller
 *
**/

App::uses('AppController', 'Controller');

class ProductsController extends AppController
{
	public $helpers = array('Html', 'form'); //include additional helpers using the global $helpers


	public function beforeFilter() {

		parent::beforeFilter();
		$this->Crud->on('beforePaginate', array($this, '_productCallback'));

	}

	public function _productCallback(CakeEvent $event) {
		$event->subject->paginator->settings;
		//debug($event->subject->paginator->settings);
	}

	public function index() {
		parent::beforeFilter();

	  $products = $this->paginate();

	  if ($this->request->is('requested')) {
	      return $products;
	  } else {
	      $this->set('posts', $products);
	  }

		return $this->Crud->execute();

	}

	public function view ($id = null) {

		$this->Crud->on('beforeFind', function (CakeEvent $event) {
		});

		$this->set('title_for_layout', 'View Product');
	    if (!$id) {
	        throw new NotFoundException(__('Invalid product'));
	    }
	    return $this->Crud->execute();
	}

//testing page
	public function landingpage() {
	  $products = $this->paginate();

	  if ($this->request->is('requested')) {
	      return $products;
	  } else {
	      $this->set('posts', $products);
	  }

	}


/**
*	Admin
*
*/
	public function admin_index() {
		return $this->Crud->execute();

	}

	public function admin_add(){

		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/products/admin_index');
		});

		return $this->Crud->execute();

	}

	public function admin_edit($id = null){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/products/admin_edit/'.$this->Product->id );
		});
		return $this->Crud->execute();

	}

	public function admin_delete ($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid product');
		}
		if ($this->Product->delete()) {
			$this->Session->setFlash('The productmod has been deleted.');
		} else {
			$this->Session->setFlash('The productmod could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'admin_index'));
	}

	public function featured ($id = null) {
		$this->Product->id = $id;

		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid model');
		}
		else{
			$this->Product->saveField('featured', 1);
			$this->Session->setFlash('model is now featured.');
			return $this->redirect(array('action' => 'admin_index', 'controller' => 'products'));
		}
	}
//unselling item
	public function unfeatured ($id = null) {
		$this->Product->id = $id;

		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid item');
		}
		else{
			$this->Product->saveField('featured', 0);
			$this->Session->setFlash('model is now unfeatured.');
			return $this->redirect(array('action' => 'admin_index', 'controller' => 'products'));
		}
	}

}
