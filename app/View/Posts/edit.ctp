<?php $this->layout = 'academic'; ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Edit an article</h1></div>

<?php

echo $this->Form->create('Post', array(
	'action' => 'edit',
	'class' => 'form', 
	'inputDefaults' => array(
	    'div' => 'control-group',
	    'label' => false,
	    'between' => '<div class="controls">',
	    'after' => '</div>',
	    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
) ));

echo $this->Form->input('title',array(
	'style' => 'width:490px', 'before' => '<span class = \'control-label\'>Title</span>'));

echo $this->Form->input('body',array(
	'style' => 'width:490px', 'rows' => '15', 'before' => '<span class = \'control-label\'>Content</span>'));
	
echo $this->Form->input('format', array(
    'options' => array('standard' => 'Standard post', 'link' => 'Link post')));
    
echo $this->Form->input('id', array('type' => 'hidden'));
	
echo ("<input type='submit' class='btn' value='Save changes'>"); ?>

<a class="btn btn-danger" href="<?php echo $this->Html->url('/posts/'); ?>">Cancel</a>