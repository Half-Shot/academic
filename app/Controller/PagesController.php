<?php
class PagesController extends AppController {
public $name = 'Pages';
public $helpers = array('Html', 'Form', 'Paginator', 'Cache');
public $components = array('Session');
public $cacheAction = array(
    'view' => 36000,
    'index' => 36000,
);
var $paginate = array(
    'limit' => 15,
    'order' => array(
    'Page.created' => 'asc'
     )
);
    
    public function isAuthorized($user) {
            if (parent::isAuthorized($user)) {
                return true;
            }
       
            return false;
    }
    
    public function index() {
        $this->set('pages', $this->paginate('Page'));
    }

    public function view($id) {
    	$page = $this->Page->find('first', array(
    		'conditions' => array(
    			"or" => array(
    				'Page.id' => $id, //for permalinks
    				'Page.slug' => $id //for SEO urls
    			)
    		),
    	));
    	$this->set(compact('page'));
    }
    
    public function add() {
        if ($this->request->is('post')) {
        	$noAccents = $this->removeAccents($this->data['Page']['title']); //remove accents
        	$this->request->data['Page']['slug'] = $this->getStringAsURL("_".$noAccents); //stores page slug
            if ($this->Page->save($this->request->data)) {
                $this->Session->setFlash('Your page has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your page.');
            }
        }
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
    
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Page->delete($id)) {
            $this->Session->setFlash('The page with id #' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}