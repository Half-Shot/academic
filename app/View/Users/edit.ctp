<?php $this->layout = Configure::read('Site.layout'); ?>

<?php echo $this->Form->create('User', array(
	'action' => 'edit',
	'class' => 'form', 
	'inputDefaults' => array(
	    'div' => 'control-group',
	    'label' => false,
	    'between' => '<div class="controls">',
	    'after' => '</div>',
	    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
) )); ?>

<?php 
echo $this->Form->input('email', array(
	'before' => '<span class = \'control-label\'>Email</span>'));
	
echo $this->Form->input('pseudo', array(
	'before' => '<span class = \'control-label\'>Pseudo</span>'));
	
echo $this->Form->input('password', array(
	'before' => '<span class = \'control-label\'>Password</span>'));
	
echo $this->Form->input('about',array(
	'rows' => '5',
	'style' => 'width:490px',
	'before' => '<span class = \'control-label\'>About you</span>'));
	
echo $this->Form->input('id', array('type' => 'hidden'));

echo("<p style='margin-bottom:16px'><i class='icon-info-sign'></i> Please note that editing your info will log you out.</p>");

echo ("<div class='form-actions'>");

echo ("<input type='Submit' class='btn' value='Save changes'>"); ?>

<a class="btn btn-danger" href="<?php echo $this->Html->url('/users/'); ?>">Cancel</a>

</div>