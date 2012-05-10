<?php
class PostsController extends AppController {
	public $name = 'Posts';
    public $helpers = array('Html', 'Form', 'Paginator', 'Text', 'Cache');
    public $components = array('Session','RequestHandler');
    public $cacheAction = array(
        'view' => 36000,
        'index' => 36000,
        'archives' => 36000,
    );
    var $paginate = array(
        'limit' => 5,
        'order' => array(
        'Post.created' => 'desc'
         )
    );
    
    public function isAuthorized($user) {
        if (parent::isAuthorized($user)) {
            return true;
        }
    
        if ($this->action === 'add') {
           // All registered members can add posts
            return true;
        }
        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = $this->request->params['pass'][0];
            return $this->Post->isOwnedBy($postId, $user['id']);
        }
    
        return false;
    }
    
    public function index() {
        if ($this->RequestHandler->isRss() ) {
            $posts = $this->Post->find('all', array(
            	'limit' => 15,
            	'order' => 'Post.created DESC'
            	));
            return $this->set(compact('posts'));
            
        } elseif ($this->RequestHandler->isXml() ) {
        	$posts = $this->Post->find('all', array(
        		'order' => 'Post.created DESC'
        		));
        	return $this->set(compact('posts'));
        }

        $this->set('posts', $this->paginate('Post'));
    }
    
    public function archives() {
    	$this->paginate = array(
    	        'limit' => 15,
    	        'order' => array(
    	        'Post.created' => 'desc'
    	         )
    	    );
    	$data = $this->paginate('Post');
        $this->set('posts', $data);
    }
    
    public function search() {
    	$this->Post->set($this->data);
    	if ($this->request->is('post')) {
    		$input = $this->data['Search']['input'];
    		$this->redirect('http://www.google.fr/search?aq=f&sourceid=chrome&ie=UTF-8&q=site%3A'.Router::url('/',true)." ".$input);
    	}
    }
    
    public function view($id) {
    	$post = $this->Post->find('first', array(
    		'conditions' => array(
    			"or" => array(
    				'Post.id' => $id, //for permalinks
    				'Post.slug' => $id //for SEO urls
    			)
    		),
    	));
    	$this->set(compact('post'));
    }

    public function add() {
        if ($this->request->is('post')) {
        	$this->request->data['Post']['user_id'] = $this->Auth->user('id'); //stores user id
        	$noAccents = $this->removeAccents($this->data['Post']['title']); //remove accents
        	$this->request->data['Post']['slug'] = date('Y-m-d')."_".$this->getStringAsURL("_".$noAccents); //stores post slug
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }
    
    public function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your post.');
            }
        }
    }
    
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id #' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'archives'));
        }
    }
    
}