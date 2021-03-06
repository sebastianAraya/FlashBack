<?php
App::uses('AppController', 'Controller');
/**
 * PropiedadesRecursos Controller
 *
 * @property PropiedadesRecurso $PropiedadesRecurso
 */
class PropiedadesRecursosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropiedadesRecurso->recursive = 0;
		$this->set('propiedadesRecursos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PropiedadesRecurso->exists($id)) {
			throw new NotFoundException(__('Invalid propiedades recurso'));
		}
		$options = array('conditions' => array('PropiedadesRecurso.' . $this->PropiedadesRecurso->primaryKey => $id));
		$this->set('propiedadesRecurso', $this->PropiedadesRecurso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropiedadesRecurso->create();
			if ($this->PropiedadesRecurso->save($this->request->data)) {
				$this->Session->setFlash(__('The propiedades recurso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedades recurso could not be saved. Please, try again.'));
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
		if (!$this->PropiedadesRecurso->exists($id)) {
			throw new NotFoundException(__('Invalid propiedades recurso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropiedadesRecurso->save($this->request->data)) {
				$this->Session->setFlash(__('The propiedades recurso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedades recurso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PropiedadesRecurso.' . $this->PropiedadesRecurso->primaryKey => $id));
			$this->request->data = $this->PropiedadesRecurso->find('first', $options);
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
		$this->PropiedadesRecurso->id = $id;
		if (!$this->PropiedadesRecurso->exists()) {
			throw new NotFoundException(__('Invalid propiedades recurso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PropiedadesRecurso->delete()) {
			$this->Session->setFlash(__('Propiedades recurso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Propiedades recurso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
