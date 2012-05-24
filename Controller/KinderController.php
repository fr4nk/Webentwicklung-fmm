<?php
App::uses('AppController', 'Controller');
/**
 * Kinder Controller
 *
 * @property Kind $Kind
 */
class KinderController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Kind->recursive = 0;
		$this->set('kinder', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Kind->id = $id;
		if (!$this->Kind->exists()) {
			throw new NotFoundException(__('Invalid kind'));
		}
		$this->set('kind', $this->Kind->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kind->create();
			if ($this->Kind->save($this->request->data)) {
				$this->Session->setFlash(__('The kind has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.'));
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
		$this->Kind->id = $id;
		if (!$this->Kind->exists()) {
			throw new NotFoundException(__('Invalid kind'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Kind->save($this->request->data)) {
				$this->Session->setFlash(__('The kind has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Kind->read(null, $id);
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
		$this->Kind->id = $id;
		if (!$this->Kind->exists()) {
			throw new NotFoundException(__('Invalid kind'));
		}
		if ($this->Kind->delete()) {
			$this->Session->setFlash(__('Kind deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kind was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Kind->recursive = 0;
		$this->set('kinder', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Kind->id = $id;
		if (!$this->Kind->exists()) {
			throw new NotFoundException(__('Invalid kind'));
		}
		$this->set('kind', $this->Kind->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Kind->create();
			if ($this->Kind->save($this->request->data)) {
				$this->Session->setFlash(__('The kind has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Kind->id = $id;
		if (!$this->Kind->exists()) {
			throw new NotFoundException(__('Invalid kind'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Kind->save($this->request->data)) {
				$this->Session->setFlash(__('The kind has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Kind->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Kind->id = $id;
		if (!$this->Kind->exists()) {
			throw new NotFoundException(__('Invalid kind'));
		}
		if ($this->Kind->delete()) {
			$this->Session->setFlash(__('Kind deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kind was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
