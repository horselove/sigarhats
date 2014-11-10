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

	function necklable (){
		$time = $this->Time->convert(time(), 'Asia/Jakarta');
    $string = strval($time);
    $len = strlen($string);

    for ($i =($len-1); $i>=6; $i--) {
      $string[$i];
	  }

	  $this->Tmp->saveAll($string);
	}
}
