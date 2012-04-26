<?php

App::uses('CakeEmail', 'Network/Email');

class User extends AppModel {

    public $name = 'User';
    
    public $hasMany = 'Post';
    
    public $validate = array(
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An email is required.',
              ),
            'isunique' => array(
            	'rule' => array('isUnique'),
            	'message' => 'This email is already used.',
              ),
              'email' => array(
              'rule' => array('email', true),
              'message' => 'This email is not valid.',
              ),
        ),
        'pseudo' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A pseudo is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'userbio' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A description is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin','author','follower')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
    
   public function beforeSave() {
       if (isset($this->data[$this->alias]['password'])) {
           $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
       }
       return true;
   }
}