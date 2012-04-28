<?php $this->layout = Configure::read('Site.layout'); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Login</h1></div>

<div style="width: 220px; margin-left: 150px;">
<?php
echo $this->Session->flash('auth');

echo $this->Form->create('User', array(
	'class' => 'form', 
	'inputDefaults' => array(
	    'div' => 'control-group',
	    'label' => false,
	    'between' => '<div class="controls">',
	    'after' => '</div>',
	    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
) ));

echo $this->Form->input('email',array(
	'style' => 'width:200px', 
	'before' => '<span class = \'control-label\'>Email</span>'));

echo $this->Form->input('password',array(
	'style' => 'width:200px',
	'before' => '<span class = \'control-label\'>Password</span>'));
	
echo ("<input type='submit' class='btn' value='Login'>"); ?>
</div>