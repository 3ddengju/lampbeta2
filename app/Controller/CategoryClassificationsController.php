<?php
App::uses('AppController', 'Controller');
/**
 * CategoryClassifications Controller
 *
 * @property CategoryClassification $CategoryClassification
 */
class CategoryClassificationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CategoryClassification->recursive = 0;
		$this->set('categoryClassifications', $this->paginate());
	}

	
		public function homepage($id=null) {
		
		if($id!=null)
		{$this->CategoryClassification->recursive = 0;
 		$this->set('categoryClassifications', $this->paginate('CategoryClassification',array('Category.id'=>$id)));
        }
		}
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CategoryClassification->id = $id;
		if (!$this->CategoryClassification->exists()) {
			throw new NotFoundException(__('Invalid category classification'));
		}
		$this->set('categoryClassification', $this->CategoryClassification->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	     
	if($this->request->is('ajax'))
	{	 $this->layout='ajax'; 
	}
		if ($this->request->is('post')) {
			$id=$this->data['CategoryClassification']['category_id'];
			
            if(!empty($this->data['CategoryClassification']['classification_id']))
			foreach($this->data['CategoryClassification']['classification_id'] as $result)		
			{
			$this->CategoryClassification->create();
			$pcd=array('CategoryClassification'=>array('category_id'=>$id,
		      'classification_id'=>$result));	
			$this->CategoryClassification->save($pcd);			
			} 
			
            
       			$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category classification could not be saved. Please, try again.'));
			}
		
		$categories = $this->CategoryClassification->Category->find('list');
		$classifications = $this->CategoryClassification->Classification->find('list');
		$this->set(compact('categories', 'classifications'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CategoryClassification->id = $id;
		if (!$this->CategoryClassification->exists()) {
			throw new NotFoundException(__('Invalid category classification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CategoryClassification->save($this->request->data)) {
				$this->Session->setFlash(__('The category classification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category classification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CategoryClassification->read(null, $id);
		}
		$categories = $this->CategoryClassification->Category->find('list');
		$classifications = $this->CategoryClassification->Classification->find('list');
		$this->set(compact('categories', 'classifications'));
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
		$this->CategoryClassification->id = $id;
		if (!$this->CategoryClassification->exists()) {
			throw new NotFoundException(__('Invalid category classification'));
		}
		if ($this->CategoryClassification->delete()) {
			$this->Session->setFlash(__('Category classification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Category classification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
