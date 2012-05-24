<?php
App::uses('AppController', 'Controller');
/**
 * Betreuer Controller
 *
 * @property Betreuer $Betreuer
 */
class BetreuerController extends AppController {


/**
 * index method
 *
 * @return void
 */
  public function index() {
    $this->Betreuer->recursive = 0;
    $this->set('betreuer', $this->paginate());
  }

/**
 * view method
 *
 * @param string $id
 * @return void
 */
  public function view($id = null) {
    $this->Betreuer->id = $id;
    if (!$this->Betreuer->exists()) {
      throw new NotFoundException(__('Betreuer nicht gefunden!'));
    }
    $this->set('betreuer', $this->Betreuer->read(null, $id));
  }

/**
 * add method
 *
 * @return void
 */
  public function add() {
    if ($this->request->is('post')) {
      $this->Betreuer->create();
      if ($this->Betreuer->save($this->request->data)) {
        $this->Session->setFlash(__('The betreuer has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The betreuer could not be saved. Please, try again.'));
      }
    }
    $rollen = $this->Betreuer->Rolle->find('list');
    $this->set(compact('rollen'));
  }

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
  public function edit($id = null) {
    $this->Betreuer->id = $id;
    if (!$this->Betreuer->exists()) {
      throw new NotFoundException(__('Invalid betreuer'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Betreuer->save($this->request->data)) {
        $this->Session->setFlash(__('The betreuer has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The betreuer could not be saved. Please, try again.'));
      }
    } else {
      $this->request->data = $this->Betreuer->read(null, $id);
    }
    $rollen = $this->Betreuer->Rolle->find('list');
    $this->set(compact('rollen'));
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
    $this->Betreuer->id = $id;
    if (!$this->Betreuer->exists()) {
      throw new NotFoundException(__('Invalid betreuer'));
    }
    if ($this->Betreuer->delete()) {
      $this->Session->setFlash(__('Betreuer deleted'));
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Betreuer was not deleted'));
    $this->redirect(array('action' => 'index'));
  }
/**
 * admin_index method
 *
 * @return void
 */
  public function admin_index() {
    $this->Betreuer->recursive = 0;
    $this->set('betreuer', $this->paginate());
  }

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
  public function admin_view($id = null) {
    $this->Betreuer->id = $id;
    if (!$this->Betreuer->exists()) {
      throw new NotFoundException(__('Invalid betreuer'));
    }
    $this->set('betreuer', $this->Betreuer->read(null, $id));
  }

/**
 * admin_add method
 *
 * @return void
 */
  public function admin_add() {
    if ($this->request->is('post')) {
      $this->Betreuer->create();
      if ($this->Betreuer->save($this->request->data)) {
        $this->Session->setFlash(__('The betreuer has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The betreuer could not be saved. Please, try again.'));
      }
    }
    $rollen = $this->Betreuer->Rolle->find('list');
    $this->set(compact('rollen'));
  }

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
  public function admin_edit($id = null) {
    $this->Betreuer->id = $id;
    if (!$this->Betreuer->exists()) {
      throw new NotFoundException(__('Invalid betreuer'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Betreuer->save($this->request->data)) {
        $this->Session->setFlash(__('The betreuer has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The betreuer could not be saved. Please, try again.'));
      }
    } else {
      $this->request->data = $this->Betreuer->read(null, $id);
    }
    $rollen = $this->Betreuer->Rolle->find('list');
    $this->set(compact('rollen'));
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
    $this->Betreuer->id = $id;
    if (!$this->Betreuer->exists()) {
      throw new NotFoundException(__('Invalid betreuer'));
    }
    if ($this->Betreuer->delete()) {
      $this->Session->setFlash(__('Betreuer deleted'));
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Betreuer was not deleted'));
    $this->redirect(array('action' => 'index'));
  }
}
