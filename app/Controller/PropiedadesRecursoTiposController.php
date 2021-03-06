<?php
App::uses('AppController', 'Controller');
/**
 * PropiedadesRecursoTipos Controller
 *
 * @property PropiedadesRecursoTipo $PropiedadesRecursoTipo
 */
class PropiedadesRecursoTiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropiedadesRecursoTipo->recursive = 0;
		$this->set('propiedadesRecursoTipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PropiedadesRecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid propiedades recurso tipo'));
		}
		$options = array('conditions' => array('PropiedadesRecursoTipo.' . $this->PropiedadesRecursoTipo->primaryKey => $id));
		$this->set('propiedadesRecursoTipo', $this->PropiedadesRecursoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropiedadesRecursoTipo->create();
			if ($this->PropiedadesRecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The propiedades recurso tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedades recurso tipo could not be saved. Please, try again.'));
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
		if (!$this->PropiedadesRecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid propiedades recurso tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropiedadesRecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The propiedades recurso tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedades recurso tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PropiedadesRecursoTipo.' . $this->PropiedadesRecursoTipo->primaryKey => $id));
			$this->request->data = $this->PropiedadesRecursoTipo->find('first', $options);
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
		$this->PropiedadesRecursoTipo->id = $id;
		if (!$this->PropiedadesRecursoTipo->exists()) {
			throw new NotFoundException(__('Invalid propiedades recurso tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PropiedadesRecursoTipo->delete()) {
			$this->Session->setFlash(__('Propiedades recurso tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Propiedades recurso tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
