<?php
class ConceptsController extends AppController {

	public function admin_index() {
		return $this->Crud->execute();
	}

	public function admin_add(){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/concepts/admin_index');
		});

		return $this->Crud->execute();

	}

	public function admin_edit($id = null){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/concepts/admin_edit/'.$this->Concept->id );
		});
		return $this->Crud->execute();

	}

	public function admin_delete ($id = null) {
		$this->Concept->id = $id;
		if (!$this->Concept->exists()) {
			throw new NotFoundException('Invalid product');
		}
		if ($this->Concept->delete()) {
			$this->Session->setFlash('The productmod has been deleted.');
		} else {
			$this->Session->setFlash('The productmod could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'admin_index'));
	}
}
