<?php

App::uses('CakeEmail', 'Network/Email');

class Contact extends AppModel {
 
    var $name = 'Contact';
    var $useTable = false;
 
    var $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'You have not entered your name.'
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'You have entered an invalid e-mail address.'
        ),
        'message' => array(
            'rule' => 'notEmpty',
            'message' => 'You did not enter a message.'
        )
    );
}