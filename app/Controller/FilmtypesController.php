<?php
class FilmtypesController extends AppController {

  public function beforeFilter() {

		parent::beforeFilter();

		$this->Crud->on('beforePaginate', [$this, '_filmTypeCallback']);
	}

// here the paginator is set
	public function _filmTypeCallback (CakeEvent $event) {
		$event->subject->paginator->settings['limit'] = 50;
		$event->subject->paginator->settings['order'] = 'Filmtype.order';

		debug($event->subject->paginator->settings);
	}

	public function view($id = null) {
		$this->Crud->on('beforeFind', function (CakeEvent $e) {
			$e->subject->query['contain']['Film'] = [];
		});

		return $this->Crud->execute();
	}

	public function admin_index() {
		return $this->Crud->execute();
	}

	public function admin_add(){
		$this->Crud->on('afterSave', function (CakeEvent $event) {
			return $this->redirect('/Filmtypes/admin_index');
	});

		return $this->Crud->execute();

	}

	public function admin_edit($id = null){
		$this->Crud->on( 'afterSave', function (CakeEvent $event ) {
			return $this->redirect( '/filmtypes/admin_edit/'.$this->Filmtype->id );
		});
		return $this->Crud->execute();

	}

	public function admin_delete ($id = null) {
		$this->Filmtype->id = $id;
		if (!$this->Filmtype->exists() ) {
			throw new NotFoundException( 'Invalid product' );
		}
		if ($this->Filmtype->delete() ) {
			$this->Session->setFlash('The film has been deleted.');
		} else {
			$this->Session->setFlash('The film could not be deleted. Please, try again.');
		}
		return $this->redirect( [ 'action' => 'admin_index' ] );
	}
}
