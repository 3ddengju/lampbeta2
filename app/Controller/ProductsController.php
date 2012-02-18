<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 */
class ProductsController extends AppController {
   public $uses=array('Product','ProductSrc','ProductDetail');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	if($this->request->is('ajax'))
	$this->layout='ajax';
	if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
			  $this->Product->save($data);
			
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('controller' => 'productDetails','action'=>'adddetail',$this->Product->id));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$stores = $this->Product->Store->find('list');
		$categories = $this->Product->Category->find('list');
		$this->set(compact('stores', 'categories'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Product->id = $id;
		$this->set('productid',$id);
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
	$this->ProductDetail->deleteAll(array('ProductDetail.product_id'=>$id));
			$i=1;
           for(;$i<=8;$i++)
    	if(!empty($this->data['Product']['classification_'.$i]))
	{
	
	   echo $this->data['Product']['classification_'.$i];
		foreach($this->data['Product']['classification_'.$i] as $result)
		{$this->ProductDetail->create();
		$pcd=array('ProductDetail'=>array('product_id'=> $id,
		'detail_id'=>$result));
		$this->ProductDetail->save($pcd);
		}
		}	
			
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}
		$stores = $this->Product->Store->find('list');
		$categories = $this->Product->Category->find('list');
		$this->set(compact('stores', 'categories'));
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
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->Product->delete()) {
			$this->ProductSrc->deleteAll(array('ProductSrc.product_id'=>$id));
			$this->ProductDetail->deleteAll(array('ProductDetail.product_id'=>$id));
			
			$this->Session->setFlash(__('Product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function ajaxadd()
	{
	
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				//$this->redirect(array('controller' => 'productDetails','action'=>'adddetail',$this->Product->id));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$stores = $this->Product->Store->find('list');
		$categories = $this->Product->Category->find('list');
		$this->set(compact('stores', 'categories'));	
	
	}

	    public function getmaxnumber()
	{
	  $this->layout='ajax';
	   $storeid=$_POST['data']['Product']['store_id'];
	   $option=$this->Product->find('first',array('order'=>array('Product.order'=>'desc'),
	                                              'conditions'=>array('Product.store_id'=>$storeid)));
	   
	   if($option['Product']['order']==null)
	   echo 1;
	   else	   
	   echo ($option['Product']['order']+1);
		
	}
	   public function productson($id=null)
	   {
	     $this->Product->updateALl(array('Product.status'=>1),
		  array('Product.id'=>$id)
		 ); 
		 if($this->referer()!="/")
	   {
			$this->redirect($this->referer());
			}
	   }
	   
	   public function productsoff($id=null)
	   {
	   	     $this->Product->updateALl(array('Product.status'=>0),
		  array('Product.id'=>$id)
		 ); 
		 if($this->referer()!="/")
	   {
			$this->redirect($this->referer());
			}
	   
	   
	   }
	}
 