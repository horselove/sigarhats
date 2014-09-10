<?php 
class CollectionsController extends AppController {

	public function admin_index() {
		return $this->Crud->execute();
	}
	
	public function admin_add(){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/collections/admin_index');
		});		

		return $this->Crud->execute();

	}
	
	public function admin_edit($id = null){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/collections/admin_edit/'.$this->Collection->id );
		});		
		return $this->Crud->execute();

	}

	public function admin_delete ($id = null) {
		$this->Collection->id = $id;
		if (!$this->Collection->exists()) {
			throw new NotFoundException('Invalid product');
		}
		if ($this->Collection->delete()) {
			$this->Session->setFlash('The productmod has been deleted.');
		} else {
			$this->Session->setFlash('The productmod could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'admin_index'));
	}
}