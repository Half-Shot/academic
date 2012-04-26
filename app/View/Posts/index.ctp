<?php $this->layout = 'academic'; ?>

<?php
$siteName = (Configure::read('Site.name'));
$siteDescription = (Configure::read('Site.description')); ?>

<?php $this->set("title_for_layout","$siteName - $siteDescription"); ?>

<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<?php foreach ($posts as $post): ?>

<?php 
$title = $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
$titleNoLink = $post['Post']['title'];
$articleLink = $this->Html->url(array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
$created = $post['Post']['created'];
$author =  $post['User']['pseudo'];
$authorLink = $this->Html->url(array('controller' => 'users', 'action' => 'view', $post['Post']['user_id']));
$body = Markdown($post['Post']['body']);
$bodyNoTag = strip_tags($body);
?>
	
<?php if (($post['Post']['format']) == 'standard') {
	echo ("
	<div class='centered'><h2>$title</h2>
	<p><i><small>Written $created by <a href ='$authorLink'>$author</a></small></i></p>
	</div>
	$body
	");
} else if (($post['Post']['format']) == 'link') {
	echo ("
	<div class='centered'><h2>$title →</h2>
	<p><i><small>Written $created by <a href ='$authorLink'>$author</a></small></i></p>
	</div>
	$body
	");
} else if (($post['Post']['format']) == 'status') {
	echo ("
	<div class='alert'>
	<div class='centered' style='padding-top:5px; padding-bottom:5px;'># $title</div>
	</div>
	");
} else if (($post['Post']['format']) == 'image') {
	echo ("
	<ul class='thumbnails' style='margin-bottom:-20px'>
	  <li>
	    <div class='thumbnail'>
	      <a href='$articleLink'><img src='$bodyNoTag' alt='' width='490'></a>
	      <h6 style='text-align:center; margin-top:5px;'>$titleNoLink</h6>
	    </div>
	  </li>
	</ul>
	");
} ?>

<hr>

<?php endforeach; ?>

<div class='centered'>
<?php echo $this->Paginator->prev(); ?> 
<?php echo $this->Paginator->numbers(); ?> 
<?php echo $this->Paginator->next(); ?>
</div>

<?php echo $this->element('legal'); ?>