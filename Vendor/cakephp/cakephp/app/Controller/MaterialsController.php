<?php 


class MaterialsController extends AppController {

	public function admin_index() {
 
		return $this->Crud->execute();
	}
	
	public function admin_add(){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/materials/admin_index');
		});		

		return $this->Crud->execute();

	}
	
	public function admin_edit($id = null){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/materials/admin_edit/'.$this->material->id );
		});		
		return $this->Crud->execute();

	}

	public function admin_delete ($id = null) {
		$this->Material->id = $id;
		if (!$this->Material->exists()) {
			throw new NotFoundException('Invalid product');
		}
		if ($this->Material->delete()) {
			$this->Session->setFlash('The material has been deleted.');
		} else {
			$this->Session->setFlash('The material could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'admin_index'));
	}
}