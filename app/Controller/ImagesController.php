<?php

class ImagesController extends AppController {

	public function admin_add ($id = null) {
		//desable layout
		//$this->layout = false;


		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect($this->request->here(false));
		});

		return $this->Crud->execute();
	}

	public function views ($id = null) {
		return $this->Crud->execute();
	}

	public function index() {
	  $images = $this->paginate();
	 if ($this->request->is('requested')) {
	      return $images;
	  } else {
	      $this->set('posts', $images);
	  }

	}

	public function admin_index() {

	  $images = $this->paginate();

	  if ($this->request->is('requested')) {
	      return $images;
	  } else {
	      $this->set('posts', $images);
	  }

	}

	public function admin_delete ($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException('Invalid Image');
		}
		if ($this->Image->delete()) {
			$this->Session->setFlash('The Image has been deleted.');
		} else {
			$this->Session->setFlash('The Image could not be deleted. Please, try again.');
		}
		return $this->redirect($this->request->here());
	}

}

