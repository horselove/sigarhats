<?php
class ResellersController extends AppController {

	public function index() {
	  $resellers = $this->paginate();

	  if ($this->request->is('requested')) {
	      return $resellers;
		}
		else {
	      $this->set('posts', $images);
	  }
		return $this->Crud->execute();
	}

	public function view ($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Invalid product'));
    }
    return $this->Crud->execute();
	}

	public function admin_index() {
		return $this->Crud->execute();
	}

	public function admin_add() {
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/resellers/admin_index');
		});
		return $this->Crud->execute();
	}
	public function admin_edit($id = null){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/resellers/admin_edit/'.$this->Reseller->id );
		});
		return $this->Crud->execute();

	}
	public function admin_delete ($id = null) {
		$this->Reseller->id = $id;
		if (!$this->Reseller->exists()) {
			throw new NotFoundException('Invalid reseller');
		}
		if ($this->Reseller->delete()) {
			$this->Session->setFlash('The reseller has been deleted.');
		} else {
			$this->Session->setFlash('The reseller could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'admin_index'));
	}
}
