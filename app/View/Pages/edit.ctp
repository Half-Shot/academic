<?php $this->layout = Configure::read('Site.layout'); ?>
<?php $this->set("title_for_layout","Edit an article"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Edit a page</h1></div>

<?php

echo $this->Form->create('Page', array(
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
	
echo $this->Form->input('slug',array(
	'style' => 'width:490px', 'before' => '<span class = \'control-label\'>Slug</span>'));

echo $this->Form->input('body',array(
	'style' => 'width:490px;font-family: Menlo, Monaco, Courier New, monospace;',
	'rows' => '20',
	'before' => '<span class = \'control-label\'>Content</span>'));
    
echo $this->Form->input('id', array('type' => 'hidden'));

echo ("<div class='form-actions'>");
	
echo ("<input type='submit' class='btn' value='Save changes'>"); ?>

<a class="btn btn-danger" href="<?php echo $this->Html->url('/pages/'); ?>">Cancel</a>

</div>