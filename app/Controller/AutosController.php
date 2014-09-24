<?php
App::uses('AppController', 'Controller');
/**
 * Autos Controller
 *
 * @property Auto $Auto
 * @property PaginatorComponent $Paginator
 */
class AutosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->Auto->recursive = 0;
		$this->set('autos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Auto->exists($id)) {
			throw new NotFoundException(__('Invalid auto'));
		}
		$options = array('conditions' => array('Auto.' . $this->Auto->primaryKey => $id));
		$this->set('auto', $this->Auto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->Auto->create();
			if ($this->Auto->save($this->request->data)) {
				$this->Session->setFlash(__('The auto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auto could not be saved. Please, try again.'));
			}
		}else{

			$settings = $this->Auto->auto_persona->find('list', array(
		    // 'conditions' => array('Setting.setting_name LIKE' => 'mode_%'),
		    'fields'     => array('id', 'nombre')
			));
	
		// $this->set('personas', $this->Auto->auto_persona->find('all'));
	       $this->set('personas', $settings);

   		   $this->set('js',array('hola'));
   		   $this->set('css',array('asd'));
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
		if (!$this->Auto->exists($id)) {
			throw new NotFoundException(__('Invalid auto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Auto->save($this->request->data)) {
				$this->Session->setFlash(__('The auto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Auto.' . $this->Auto->primaryKey => $id));
			$this->request->data = $this->Auto->find('first', $options);
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
		$this->Auto->id = $id;
		if (!$this->Auto->exists()) {
			throw new NotFoundException(__('Invalid auto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Auto->delete()) {
			$this->Session->setFlash(__('The auto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The auto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
