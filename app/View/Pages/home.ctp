<?php $this->layout = 'academic'; ?>

<?php 
//Define SEO variables. Go to /app/Config/boostrap.php to edit
$siteName = (Configure::read('site.name'));
$siteDescription = (Configure::read('site.description')); ?>

<?php $this->set("title_for_layout","$siteName - $siteDescription"); ?>

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
$titleNoLink = $post['Post']['title'];
$link = $this->Html->url(array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
$created = $post['Post']['created'];
$author = Configure::read('site.author');
$body = Markdown($post['Post']['body']);
$bodyNoTag = strip_tags($body);
?>
	
<?php if (($post['Post']['format']) == 'standard') {
		echo ("
		<div class='centered'><h2>$title</h2>
		<p><i><small>Written $created, by $author</small></i></p>
		</div>
		$body
		");
} else if (($post['Post']['format']) == 'link') {
		echo ("
		<div class='centered'><h2>$title →</h2>
		<p><i><small>Written $created, by $author</small></i></p>
		</div>
		$body
		");
} else if (($post['Post']['format']) == 'status') {
		echo ("
		<div class='alert'>
		<div style='padding-top:5px; padding-bottom:5px;'># $title</div>
		</div>
		");
} else if (($post['Post']['format']) == 'image') {
		echo ("
		<ul class='thumbnails' style='margin-bottom:-20px'>
		  <li>
		    <div class='thumbnail'>
		      <a href='$link'><img src='$bodyNoTag' alt='' width='490'></a>
		      <h6 style='text-align:center;'>$titleNoLink</h6>
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