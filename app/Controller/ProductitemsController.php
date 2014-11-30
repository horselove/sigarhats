<?php


class ProductitemsController extends AppController {

	public function admin_add ($id = null) {

		$this->Crud->on('afterSave', function (CakeEvent $event) {

			return $this->redirect($this->request->here(false));
		});

		return $this->Crud->execute();
	}

	public function admin_delete ($id = null) {
		$this->Productitem->id = $id;
		if (!$this->Productitem->exists()) {
			throw new NotFoundException('Invalid product');
		}
		if ($this->Productitem->delete()) {
			$this->Session->setFlash('The productmod has been deleted.');
		} else {
			$this->Session->setFlash('The productmod could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'admin_index', 'controller' => 'products'));
	}

	public function admin_edit ($id = null) {
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/productitems/admin_edit/'.$this->Productitem->id );
		});
		return $this->Crud->execute();

	}

//selling and unselling items
	public function sold ($id = null) {
		$this->Productitem->id = $id;

		if (!$this->Productitem->exists()) {
			throw new NotFoundException('Invalid item');
		}
		else{
			$this->Productitem->saveField('sold', 1);
			$this->Session->setFlash('Item sold.');
			return $this->redirect(array('action' => 'admin_index', 'controller' => 'products'));
		}
	}
	public function notsold ($id = null) {
		$this->Productitem->id = $id;

		if (!$this->Productitem->exists()) {
			throw new NotFoundException('Invalid item');
		}
		else{
			$this->Productitem->saveField('sold', 0);
			$this->Session->setFlash('Item unsold.');
			return $this->redirect(array('action' => 'admin_index', 'controller' => 'products'));
		}
	}

}
