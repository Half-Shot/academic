<?php
class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'format' => array(
            'valid' => array(
                'rule' => array('inList', array('standard', 'link')),
                'message' => 'Please enter a valid format',
                'allowEmpty' => false
            )
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}