<?php

class Post extends AppModel {

	public $name = 'Post';
	
	public $belongsTo = 'User';
	
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'format' => array(
            'valid' => array(
                'rule' => array('inList', array('standard', 'link', 'status', 'image')),
                'message' => 'Please enter a valid format',
                'allowEmpty' => false
            )
        ),
        'slug' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

	public function isOwnedBy($post, $user) {
	    return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
	}
		
}