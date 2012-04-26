<?php
class ContactsController extends AppController {
 	
 	public function beforeFilter() {
 	    parent::beforeFilter();
 	    $this->Auth->allow('send');
 	}
 	
    public function send() {
        if(!empty($this->data)) {
            $this->Contact->set($this->data);
            if($this->Contact->validates()) {
                $email = new CakeEmail();
                $email->from(array($this->data['Contact']['email'] => $this->data['Contact']['name']));
                $email->to(Configure::read('Site.email'));
                $email->subject('Contact');
                $email->send($this->data['Contact']['message']);
                $this->Session->setFlash('Your message has been sent.');
                $this->redirect(array('controller' => 'posts', 'action' => 'index'));
            } else {
                $this->render('index');
            }
        }
    }
 
    function index() {
        // Placeholder for index. No actual action here, everything is submitted to the send function.
    }
 
}