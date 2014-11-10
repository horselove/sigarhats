<?php

class FilmsController extends AppController {

  public function beforeFilter() {

		parent::beforeFilter();

		$this->Crud->on('beforePaginate', [$this, '_filmCallback']);

    $this->Crud->addListener('Api');
    $this->Crud->addListener('ApiPagination');
  }

  public function _filmCallback(CakeEvent $event) {

		$event->subject->paginator->settings['limit'] = 50;
		$event->subject->paginator->settings['order'] = '';
		debug($event->subject->paginator->settings);
	}

	public function index () {
		$this->Crud->execute();

	}

	public function admin_index () {
		return $this->Crud->execute();
	}

	public function admin_add () {
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/films/admin_index');
		});

		return $this->Crud->execute();

	}

	public function admin_edit ($id = null) {
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/films/admin_edit/'.$this->Film->id );
		});
		return $this->Crud->execute();

	}

	public function admin_delete ($id = null) {
		$this->Film->id = $id;
		if (!$this->Film->exists()) {
			throw new NotFoundException('Invalid product');
		}
		if ($this->Film->delete()) {
			$this->Session->setFlash('The film has been deleted.');
		} else {
			$this->Session->setFlash('The film could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'admin_index'));
	}
}
