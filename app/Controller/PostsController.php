<?php
class PostsController extends AppController {
	public $name = 'Posts';
    public $helpers = array('Html', 'Form', 'Paginator', 'Text');
    public $components = array('Session','RequestHandler');
    var $paginate = array(
        'limit' => 15,
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
            $posts = $this->Post->find('all', array('limit' => 20, 'order' => 'Post.created DESC'));
            return $this->set(compact('posts'));
        }

        $this->set('posts', $this->paginate('Post'));
        //$this->set('posts', $this->Post->find('all'));
    }

    public function view($id) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());

    }

    public function add() {
        if ($this->request->is('post')) {
        	$this->request->data['Post']['ownerid'] = $this->Auth->user('id'); //stores owner id
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
            $this->redirect(array('action' => 'index'));
        }
    }
}