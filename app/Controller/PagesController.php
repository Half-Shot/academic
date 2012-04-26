<?php
class PagesController extends AppController {
public $name = 'Pages';
public $helpers = array('Html', 'Form', 'Paginator', 'Text');
public $components = array('Session');
var $paginate = array(
    'limit' => 20,
    'order' => array(
    'Post.created' => 'desc'
     )
);
    
    public function isAuthorized($user) {
            if (parent::isAuthorized($user)) {
                return true;
            }
       
            return false;
    }

    public function view($id) {
        $this->Page->id = $id;
        $this->set('page', $this->Page->read());
    }
     
    public function edit($id = null) {
        $this->Page->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Page->read();
        } else {
            if ($this->Page->save($this->request->data)) {
                $this->Session->setFlash('The page has been updated.');
                $this->redirect(array('controller' => 'posts', 'action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update the page.');
            }
        }
    }
}