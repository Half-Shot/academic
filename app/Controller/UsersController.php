<?php
class UsersController extends AppController {
public $helpers = array('Paginator', 'Cache');
public $components = array(
    'Auth' => array(
        'authenticate' => array(
            'Form' => array(
                'fields' => array('username' => 'email')
            )
        )
    )
);
public $cacheAction = array(
    'view' => 36000,
);
var $paginate = array('User'=>array(
	    'limit' => 15,
	    'order' => array(
	         'User.id' => 'asc'
	     )
	),
	
);
	
	public function login() {
	    if ($this->Auth->login()) {
	        $this->redirect($this->Auth->redirect());
	    } else {
	        $this->Session->setFlash(__('Please enter a valid username and password'));
	    }
	}
	
	public function logout() {
	    $this->redirect($this->Auth->logout());
	}

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','login', 'logout');
        $this->Auth->deny('index');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
    
    public function view($id) {
        $this->User->id = $id;
        $this->set('user', $this->User->read());
    }

    public function add() {
    	$this->set('users', $this->User->find('all')); //used to check if an admin account is registred
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
            	$siteroot = Router::url('/',true);
            	$email = new CakeEmail();
            	$email->from(array(Configure::read('Site.email') => 'academic*'));
            	$email->to($this->data['User']['email']);
            	$email->subject('Your account');
            	$email->send('Your account have been created successfully. Please go to '.$siteroot.'users/login/ to login.');
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('controller' => 'posts', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }
    
    public function isAuthorized($user) {
            if (parent::isAuthorized($user)) {
                return true;
            }
           
            if ($this->action === 'edit') {
                if ($this->Auth->user('id') == $this->request->params['pass'][0]) {
                 return true;
                }
            }
       
            return false;
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                //$this->redirect(array('action' => 'index'));
                $this->redirect($this->Auth->logout());
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
    
}