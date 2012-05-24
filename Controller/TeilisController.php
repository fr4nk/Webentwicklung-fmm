<?php
App::uses('AppController', 'Controller');
/**
 * Teilis Controller
 *
 * @property Teili $Teili
 */
class TeilisController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Teili->recursive = 0;
		$this->set('teilis', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Teili->id = $id;
		if (!$this->Teili->exists()) {
			throw new NotFoundException(__('Invalid teili'));
		}
		$this->set('teili', $this->Teili->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Teili->create();
			if ($this->Teili->save($this->request->data)) {
				$this->Session->setFlash(__('The teili has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teili could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Teili->id = $id;
		if (!$this->Teili->exists()) {
			throw new NotFoundException(__('Invalid teili'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Teili->save($this->request->data)) {
				$this->Session->setFlash(__('The teili has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teili could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Teili->read(null, $id);
		}
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
		$this->Teili->id = $id;
		if (!$this->Teili->exists()) {
			throw new NotFoundException(__('Invalid teili'));
		}
		if ($this->Teili->delete()) {
			$this->Session->setFlash(__('Teili deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Teili was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
