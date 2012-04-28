<?php $this->layout = 'academic'; ?>

<?php $siteName = (Configure::read('Site.name')); ?>
<?php $this->set("title_for_layout","Contact - $siteName"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Contact</h1></div>

<?php
echo $this->Form->create('Contact', array(
	'class' => 'form',
	'action' => 'send', 
	'inputDefaults' => array(
	    'div' => 'control-group',
	    'label' => false,
	    'between' => '<div class="controls">',
	    'after' => '</div>',
	    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
) ));

echo $this->Form->input('Contact.name', array(
	'before' => '<span class = \'control-label\'>Your name</span>'));
echo $this->Form->input('Contact.email', array(
	'before' => '<span class = \'control-label\'>Your email</span>'));
echo $this->Form->input('Contact.message', array(
	'style' => 'width:490px;',
	'before' => '<span class = \'control-label\'>Your message</span>',
	'rows' => 10));
	
echo ("<div class='form-actions'>");
	
echo ("<input type='submit' class='btn' value='Send message'>"); ?>

<a class="btn btn-danger" href="<?php echo $this->Html->url('/'); ?>">Cancel</a>

</div>