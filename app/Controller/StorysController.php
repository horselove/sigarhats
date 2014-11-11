<?php
class StorysController extends AppController {

	public function index() {
		$this->Crud->execute();
	}
	public function admin_index() {
		$this->Crud->execute();
	}
	public function admin_add() {
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/storys/admin_index');
		});
		return $this->Crud->execute();
	}
	public function admin_edit($id = null){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/storys/admin_edit/'.$this->Story->id );
		});
		return $this->Crud->execute();

	}
}
