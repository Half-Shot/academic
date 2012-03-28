<?php $this->layout = 'academic'; ?>

<?php 
//Define SEO variables. Go to /app/Config/boostrap.php to edit
$siteName = (Configure::read('site.name')); ?>

<?php $this->set("title_for_layout","$siteName"); ?>

<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<?php 
//Check if there is an admin account
$adduser = $this->Html->url('/users/add/');
if (empty($users)) {
	echo("
	
	<div class='alert alert-info'>
	 <h3 style='text-align:center;'>IMPORTANT</h3>
	 <p style='text-align:center;'>There is no admin account for this blog.<br> Please create an account by clicking <a href='$adduser'>here</a>.</p>
	</div>
	
	");
} ?>

<?php foreach ($posts as $post): ?>

<?php 
$title = $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
$created = $post['Post']['created'];
$body = Markdown($post['Post']['body']);
?>
	
<?php if (($post['Post']['format']) == 'standard') {
		echo ("
		<div class='centered'><h2>$title</h2>
		<p><i><small>Written $created</small></i></p>
		</div>
		$body
		");
} else if (($post['Post']['format']) == 'link') {
		echo ("
		<div class='centered'><h2>$title →</h2>
		<p><i><small>Written $created</small></i></p>
		</div>
		$body
		");
} else if (($post['Post']['format']) == 'status') {
		echo ("
		<div class='alert'>
		<div style='padding-top:5px; padding-bottom:5px;'># $title</div>
		</div>
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