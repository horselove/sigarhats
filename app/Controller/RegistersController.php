<?php

class RegistersController extends AppController {

public $uses = array('Productitem','RegisteredCap');
public $components = array('Uploading','Session', 'Cookie');

	public function index($id=0) {

		if (!empty($_POST)) {
	 		$this->add();
	  }
	}

  public function add() {
    $necklableId=0;

    if(!empty($this->request->data['necklabel_id'])) {
      $necklableId=  trim($this->request->data['necklabel_id']);
    }
    if($necklableId == '' ) {
      if(!empty($this->request->data['Register']['necklabel_id'])) {
        $necklableId=  trim($this->request->data['Register']['necklabel_id']);
      }
    }
    $arr = $this->Productitem->getByNecklable($necklableId);
    if(!empty($arr)) {

      $dat = array();

      if(!empty($this->request->data['Register']['registercap']) && $this->request->data['Register']['registercap'] != '') {
        $arrSave=array('RegisteredCap'=>array(
	        'name'=>$this->request->data['Register']['name'],
	        'location'=>$this->request->data['Register']['location'],
	        'birth'=>$this->request->data['Register']['birth'],
	        'profession'=>$this->request->data['Register']['profession'],
	        'email'=>$this->request->data['Register']['email'],
	        'productitem_id'=>$this->request->data['Register']['productitem_id'],
       	));

	      if($this->request->data['Register']['id']>0)
	      {
	          $arrSave['RegisteredCap']['id']=$this->request->data['Register']['id'];
	      }
        if(!empty($_FILES) && $_FILES['image_url']['name']!='') {

            $arre = $this->RegisteredCap->find('first',array('conditions'=>array('productitem_id'=>$arr[0]['productitems']['id'])));
            if (file_exists($this->webroot.$arre['RegisteredCap']['image_url']))
            {
                unlink($this->webroot.$arre['RegisteredCap']['image_url']);
            }
            $arrSave['RegisteredCap']['image_url']=$this->Uploading->uploadImage($_FILES,  'uploads/images/registered_caps/');
        }
                $this->RegisteredCap->save($arrSave);
            }
            $this->set('data',  $this->RegisteredCap->find('first',array('conditions'=>array('productitem_id'=>$arr[0]['productitems']['id']))));
            $this->set('necklableId',$arr[0]['productitems']['necklable_id']);
            $this->set('productItemId',$arr[0]['productitems']['id']);
            $this -> render('add');
        }
        else
        {
            $this->Session->setFlash('Invalid necklabel !');
            return $this->redirect('/registers');
        }

	}


}
