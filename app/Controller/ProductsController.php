<?php

/**
 *
 * Product controller
 *
**/

App::uses('AppController', 'Controller');

class ProductsController extends AppController
{
	public $helpers = ['Html', 'form']; //include additional helpers using the global $helpers
  public $uses = ['Product','Size','Concept','Collection','Image'];
  public $components = ['Paginator'];
  public $paginate = ['limit' => 9];

	public function beforeFilter() {

		parent::beforeFilter();
		$this->Crud->on('beforePaginate', array($this, '_productCallback'));

	}

	public function _productCallback(CakeEvent $event) {
		$event->subject->paginator->settings;
		//debug($event->subject->paginator->settings);
	}

	public function index() {
		//parent::beforeFilter();
    $sizes = $this->Size->getAll();
    $this->set('sizes', $sizes);
    $concepts = $this->Concept->getAll();
    $this->set('concepts', $concepts);
    $collections = $this->Collection->getAll();
    $this->set('collections', $collections);

    $arrConditions = [];

    if($this->request->is('post')) {
      if(!empty($this->request->data['Product']['size_id'])) {
          //$arrConditions['productitems.size_id']=$this->request->data['Product']['size_id'];
      }
      if(!empty($this->request->data['Product']['concept_id'])) {
          $arrConditions['Product.concept_id'] = $this->request->data['Product']['concept_id'];
      }
      if(!empty($this->request->data['Product']['collection_id'])) {
          $arrConditions['Product.collection_id'] = $this->request->data['Product']['collection_id'];
      }
    }

    $this->paginate= ['limit' => 9,'conditions' => $arrConditions];

    $this->Paginator->settings = $this->paginate;

    // similar to findAll(), but fetches paged results
    $products = $this->Paginator->paginate('Product');
    $arrproducts = $products;

    if (!empty($this->request->data['Product']['size_id'])
    	&& $this->request->data['Product']['size_id'] > 0) {
        $cnt =- 1;
        $products = [];

      foreach ($arrproducts as $pro) {
        foreach ($pro['productitems'] as $pi) {
          if(!empty($pi['size_id']))
          {
            if($pi['size_id']==$this->request->data['Product']['size_id'])
            {
              $products[++$cnt]=$pro;
            }
          }
        }
      }
    }

    $this->set('products', $products);
    $this->set('images',  $this->Image->getAll());
    return $products;
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


/**
*	Admin
*
*/

	public function admin_index() {

		$this->Crud->on('beforePaginate', function (CakeEvent $event) {
			$event->subject->paginator->settings['limit'] = 1000;
		});

		return $this->Crud->execute();

	}

	public function admin_add(){

		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/images/admin_add/'.$this->Product->id);
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

//featured item

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
