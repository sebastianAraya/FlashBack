<?php
App::uses('AppController', 'Controller');
/**
 * EventoTiposRecintoTipos Controller
 *
 * @property EventoTiposRecintoTipo $EventoTiposRecintoTipo
 */
class EventoTiposRecintoTiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventoTiposRecintoTipo->recursive = 0;
		$this->set('eventoTiposRecintoTipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventoTiposRecintoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipos recinto tipo'));
		}
		$options = array('conditions' => array('EventoTiposRecintoTipo.' . $this->EventoTiposRecintoTipo->primaryKey => $id));
		$this->set('eventoTiposRecintoTipo', $this->EventoTiposRecintoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventoTiposRecintoTipo->create();
			if ($this->EventoTiposRecintoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipos recinto tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipos recinto tipo could not be saved. Please, try again.'));
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
		if (!$this->EventoTiposRecintoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipos recinto tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventoTiposRecintoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipos recinto tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipos recinto tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventoTiposRecintoTipo.' . $this->EventoTiposRecintoTipo->primaryKey => $id));
			$this->request->data = $this->EventoTiposRecintoTipo->find('first', $options);
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
		$this->EventoTiposRecintoTipo->id = $id;
		if (!$this->EventoTiposRecintoTipo->exists()) {
			throw new NotFoundException(__('Invalid evento tipos recinto tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventoTiposRecintoTipo->delete()) {
			$this->Session->setFlash(__('Evento tipos recinto tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evento tipos recinto tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
