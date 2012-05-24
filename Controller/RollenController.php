<?php
App::uses('AppController', 'Controller');
/**
 * Rollen Controller
 *
 * @property Rolle $Rolle
 */
class RollenController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rolle->recursive = 0;
		$this->set('rollen', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rolle->id = $id;
		if (!$this->Rolle->exists()) {
			throw new NotFoundException(__('Invalid rolle'));
		}
		$this->set('rolle', $this->Rolle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rolle->create();
			if ($this->Rolle->save($this->request->data)) {
				$this->Session->setFlash(__('The rolle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rolle could not be saved. Please, try again.'));
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
		$this->Rolle->id = $id;
		if (!$this->Rolle->exists()) {
			throw new NotFoundException(__('Invalid rolle'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rolle->save($this->request->data)) {
				$this->Session->setFlash(__('The rolle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rolle could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rolle->read(null, $id);
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
		$this->Rolle->id = $id;
		if (!$this->Rolle->exists()) {
			throw new NotFoundException(__('Invalid rolle'));
		}
		if ($this->Rolle->delete()) {
			$this->Session->setFlash(__('Rolle deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rolle was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Rolle->recursive = 0;
		$this->set('rollen', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Rolle->id = $id;
		if (!$this->Rolle->exists()) {
			throw new NotFoundException(__('Invalid rolle'));
		}
		$this->set('rolle', $this->Rolle->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Rolle->create();
			if ($this->Rolle->save($this->request->data)) {
				$this->Session->setFlash(__('The rolle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rolle could not be saved. Please, try again.'));
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
		$this->Rolle->id = $id;
		if (!$this->Rolle->exists()) {
			throw new NotFoundException(__('Invalid rolle'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rolle->save($this->request->data)) {
				$this->Session->setFlash(__('The rolle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rolle could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rolle->read(null, $id);
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
		$this->Rolle->id = $id;
		if (!$this->Rolle->exists()) {
			throw new NotFoundException(__('Invalid rolle'));
		}
		if ($this->Rolle->delete()) {
			$this->Session->setFlash(__('Rolle deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rolle was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
