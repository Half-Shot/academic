<?php $this->layout = Configure::read('Site.layout'); ?>

<?php
$siteName = (Configure::read('Site.name'));
$siteDescription = (Configure::read('Site.description')); ?>

<?php $this->set("title_for_layout","$siteName - $siteDescription"); ?>

<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<?php foreach ($posts as $post): ?>

<?php 
$title = $this->Html->link($post['Post']['title'], "../post/".$post['Post']['slug']);
$titleNoLink = $post['Post']['title'];
$articleLink = $this->Html->url("../post/".$post['Post']['slug']);
$created = strtotime($post['Post']['created']);
$author =  $post['User']['pseudo'];
$body = Markdown($post['Post']['body']);
$bodyNoTag = strip_tags($body);
?>
	
<?php if (($post['Post']['format']) == 'standard') {
	echo ("
	<div class='centered'><h2>$title</h2>
	<p><i><small>Published ".date('l dS M Y' , $created)." by $author</small></i></p>
	</div>
	$body
	");
} else if (($post['Post']['format']) == 'link') {
	echo ("
	<div class='centered'><h2>$title →</h2>
	<p><i><small>Published ".date('l dS M Y' , $created)." by $author</small></i></p>
	</div>
	$body
	");
} else if (($post['Post']['format']) == 'status') {
	echo ("
	<div class='alert'>
	<div class='centered' style='padding-top:5px; padding-bottom:5px;'>$title</div>
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
<?php 
if ($this->Paginator->hasPage(2)) { 
	echo $this->Paginator->prev();
	echo (" | ");
} ?> 
<?php echo $this->Paginator->numbers(); ?> 
<?php 
if ($this->Paginator->hasPage(2)) { 
	echo (" | ");
	echo $this->Paginator->next();
	echo ("<hr>");
} ?> 
</div>