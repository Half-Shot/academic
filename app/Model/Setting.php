<?php
class Setting extends AppModel {
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'description' => array(
            'rule' => 'notEmpty'
        ),
        'value' => array(
            'rule' => 'notEmpty'
        )
    );
}