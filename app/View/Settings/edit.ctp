<?php $this->layout = Configure::read('Site.layout'); ?>
<?php $this->set("title_for_layout","Edit a setting"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Edit a setting</h1></div>

<?php

echo $this->Form->create('Setting', array(
	'action' => 'edit',
	'class' => 'form', 
	'inputDefaults' => array(
	    'div' => 'control-group',
	    'label' => false,
	    'between' => '<div class="controls">',
	    'after' => '</div>',
	    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
) ));

echo $this->Form->input('value', array(
	'style' => 'width:490px', 'before' => '<span class = \'control-label\'>Value</span>'));
    
echo $this->Form->input('id', array('type' => 'hidden'));
	
echo ("<input type='submit' class='btn' value='Save setting'>"); ?>

<a class="btn btn-danger" href="<?php echo $this->Html->url('/settings/'); ?>">Cancel</a>