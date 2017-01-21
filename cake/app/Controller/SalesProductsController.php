<?php
App::uses('AppController', 'Controller');
/**
 * SalesProducts Controller
 *
 * @property SalesProduct $SalesProduct
 * @property PaginatorComponent $Paginator
 */
class SalesProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalesProduct->recursive = 0;
		$this->set('salesProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalesProduct->exists($id)) {
			throw new NotFoundException(__('Invalid sales product'));
		}
		$options = array('conditions' => array('SalesProduct.' . $this->SalesProduct->primaryKey => $id));
		$this->set('salesProduct', $this->SalesProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalesProduct->create();
			if ($this->SalesProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The sales product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales product could not be saved. Please, try again.'));
			}
		}
		$products = $this->SalesProduct->Product->find('list');
		$sales = $this->SalesProduct->Sale->find('list');
		$this->set(compact('products', 'sales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SalesProduct->exists($id)) {
			throw new NotFoundException(__('Invalid sales product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SalesProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The sales product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalesProduct.' . $this->SalesProduct->primaryKey => $id));
			$this->request->data = $this->SalesProduct->find('first', $options);
		}
		$products = $this->SalesProduct->Product->find('list');
		$sales = $this->SalesProduct->Sale->find('list');
		$this->set(compact('products', 'sales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SalesProduct->id = $id;
		if (!$this->SalesProduct->exists()) {
			throw new NotFoundException(__('Invalid sales product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SalesProduct->delete()) {
			$this->Session->setFlash(__('The sales product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sales product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
