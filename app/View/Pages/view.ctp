<?php $this->layout = 'academic'; ?>

<?php $siteName = (Configure::read('Site.name')); ?>

<?php $pageName = ($page['Page']['title']); ?>

<?php $this->set("title_for_layout", "$pageName - $siteName"); ?>
<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<div class="centered"><h1 style="margin-bottom: 20px;"><?php echo $page['Page']['title'] ?>

<?php 
$editlink = $this->Html->link('Edit', array('action' => 'edit', $page['Page']['id'])); 
if ('admin' == $this->Session->read('Auth.User.role')) {
	echo ("<small>$editlink<small>");
} ?>

</h1></div>

<?php $body = $page['Page']['body'] ?>

<?php echo Markdown($body) ?>

<?php echo $this->element('legal'); ?>