<?php
App::uses('AppController', 'Controller');
/**
 * EmpleadoTipos Controller
 *
 * @property EmpleadoTipo $EmpleadoTipo
 */
class EmpleadoTiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmpleadoTipo->recursive = 0;
		$this->set('empleadoTipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmpleadoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid empleado tipo'));
		}
		$options = array('conditions' => array('EmpleadoTipo.' . $this->EmpleadoTipo->primaryKey => $id));
		$this->set('empleadoTipo', $this->EmpleadoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmpleadoTipo->create();
			if ($this->EmpleadoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado tipo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmpleadoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid empleado tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmpleadoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpleadoTipo.' . $this->EmpleadoTipo->primaryKey => $id));
			$this->request->data = $this->EmpleadoTipo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmpleadoTipo->id = $id;
		if (!$this->EmpleadoTipo->exists()) {
			throw new NotFoundException(__('Invalid empleado tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmpleadoTipo->delete()) {
			$this->Session->setFlash(__('Empleado tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empleado tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
