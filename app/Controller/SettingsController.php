<?php
class SettingsController extends AppController {

public $helpers = array('Paginator');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny('index');
    }
    
    public function isAuthorized($user) {
            if (parent::isAuthorized($user)) {
                return true;
            }
       
            return false;
    }
    
    public function index() {
        $this->Setting->recursive = 0;
        $this->set('settings', $this->Setting->find('all'));
    }
    
    public function edit($id = null) {
        $this->Setting->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Setting->read();
        } else {
            if ($this->Setting->save($this->request->data)) {
                $this->Session->setFlash('Your setting has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your setting.');
            }
        }
    }
    
    public function clearCache() {
    	clearCache();
    	$this->Session->setFlash('The cache has been cleared.');
    	$this->redirect(array('controller' => 'posts', 'action' => 'index'));
    }
}