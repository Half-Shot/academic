<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Add an account"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Add an account</h1></div>

<?php

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
	'before' => '<span class = \'control-label\'>Email</span>'));

echo $this->Form->input('pseudo',array(
	'before' => '<span class = \'control-label\'>Pseudo</span>'));
	
echo $this->Form->input('password',array(
	'before' => '<span class = \'control-label\'>Password</span>'));
	
echo $this->Form->input('about',array(
	'rows' => '5',
	'style' => 'width:490px',
	'before' => '<span class = \'control-label\'>About user</span>'));
	
echo $this->Form->input('role', array(
		'before' => '<span class = \'control-label\'>Role</span>',
	    'options' => array('admin' => 'Administrator', 'author' => 'Author')
	));
	
echo ("<div class='form-actions'>");
	
echo ("<input type='submit' class='btn' value='Save account'>"); ?>

<a class="btn btn-danger" href="<?php echo $this->Html->url('/'); ?>">Cancel</a>

</div>