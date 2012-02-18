<?php
App::uses('AppController', 'Controller');
/**
 * ProductSrcs Controller
 *
 * @property ProductSrc $ProductSrc
 */
class ProductSrcsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductSrc->recursive = 0;
		$this->set('productSrcs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductSrc->id = $id;
		if (!$this->ProductSrc->exists()) {
			throw new NotFoundException(__('Invalid product src'));
		}
		$this->set('productSrc', $this->ProductSrc->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductSrc->create();
			if ($this->ProductSrc->save($this->request->data)) {
				$this->Session->setFlash(__('The product src has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product src could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductSrc->Product->find('list');
		$positions = $this->ProductSrc->Position->find('list');
		$this->set(compact('products', 'positions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProductSrc->id = $id;
		if (!$this->ProductSrc->exists()) {
			throw new NotFoundException(__('Invalid product src'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductSrc->save($this->request->data)) {
				$this->Session->setFlash(__('The product src has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product src could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductSrc->read(null, $id);
		}
		$products = $this->ProductSrc->Product->find('list');
		$positions = $this->ProductSrc->Position->find('list');
		$this->set(compact('products', 'positions'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ProductSrc->id = $id;
		if (!$this->ProductSrc->exists()) {
			throw new NotFoundException(__('Invalid product src'));
		}
		if ($this->ProductSrc->delete()) {
			$this->Session->setFlash(__('Product src deleted'));
             if($this->referer()!="/")
			{
			$this->redirect($this->referer());
			}
			else 
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product src was not deleted'));
		$this->redirect(array('action' => 'index'));
 	}
     public function addnew($id=null)
      {
	  if($this->request->is('ajax'))
       $this->layout='ajax';	  
	     $this->set('id',$id);
        if(!empty($this->data))
       {
           $id=$this->data['ProductSrc']['product_id'];
           $pid=$this->data['ProductSrc']['position_id'];
		 //  print_r($this->data['ProductSrc']['src1']);
           foreach($this->data['ProductSrc']['src1'] as $result)
             {
			  $result=$this->data['ProductSrc']['store_url'].$result;
			    echo $result;
			  $this->ProductSrc->create();
			  $pcd=array('ProductSrc'=>array('product_id'=> $id,
		'position_id'=>$pid,'src'=>$result));	
		$this->ProductSrc->save($pcd);
		
			 }		   

	   }		
	                   
	    $products = $this->ProductSrc->Product->find('list');
		$positions = $this->ProductSrc->Position->find('list');
		$this->set(compact('products', 'positions'));   
	}	 
	public function getsrcs($id=null)
	{
	 if($id!=null)
	{
	
	    return $this->ProductSrc->find('list',array('fields'=>array('ProductSrc.id','ProductSrc.src'),'conditions'=>array('ProductSrc.product_id'=>$id)));
	
	}
	}
	public function savesrcs($id=null)
	{
    	$this->set('id',$id);
        if(!empty($this->data))
       	{
       		print_r($_POST);
       		$tempFile = $_FILES['Filedata']['tmp_name'];
       		
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';
			$targetFile =  str_replace('//','/',$targetPath) . 'abc'.$_FILES['Filedata']['name'];
			
			move_uploaded_file($tempFile,$targetFile);
			echo str_replace($_SERVER['DOCUMENT_ROOT'],'',$targetFile);
			$this->ProductSrc->create();
			$pcd=array('ProductSrc'=>array('product_id'=> $id,'position_id'=>$pid,'src'=>$targetFile));
			$this->ProductSrc->save($pcd);
	   }		
	                   
	    $products = $this->ProductSrc->Product->find('list');
		$positions = $this->ProductSrc->Position->find('list');
		$this->set(compact('products', 'positions'));   
	}	 
	
	
	
	
	
	
}
