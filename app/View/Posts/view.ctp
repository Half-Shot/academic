<?php $this->layout = 'academic'; ?>

<!-- Define SEO variables. Go to /app/Config/boostrap.php to edit -->
<?php $siteName = (Configure::read('site.name')); ?>

<!-- Define post name -->
<?php $postName = ($post['Post']['title']); ?>

<?php $this->set("title_for_layout", "$postName - $siteName"); ?>
<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<div class="centered">
<h2><?php if (($post['Post']['format']) == 'status') {
	echo ("# ");
} ?>
<?php echo $post['Post']['title'] ?> <?php if(($post['Post']['format']) == 'link') {
	echo ("→");
} ?></h2>
<p><i><small>Written <?php echo $post['Post']['created']?>, by <?php echo Configure::read('site.author') ?></small></i></p>
</div>

<?php $body = $post['Post']['body'] ?>

<?php if (($post['Post']['format']) == 'image') {
		echo ("
		<ul class='thumbnails' style='margin-bottom:-20px'>
		  <li>
		    <div class='thumbnail'>
		      <img src='$body' alt='' width='490'>
		    </div>
		   </li>
		 </ul>
		 ");
	} else {
		echo Markdown(($post['Post']['body']));
	} ?>

<?php 
$editlink = $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); 
 ?>

<hr>

<p style="text-align: center; color: #999999;"><i class="icon-download-alt"></i> <?php echo $this->Html->link('Download as PDF', array('action'=>'view', 'ext'=>'pdf', $post['Post']['id'])); ?> - <a href="http://twitter.com/?status=<?php echo Router::url($this->here, true); ?>"><i class="icon-retweet"></i> Tweet this</a> <?php 
if ('admin' == $this->Session->read('Auth.User.role')) {
	echo ("- <i class='icon-edit'></i> $editlink");
} ?> </p>

<?php echo $this->element('legal'); ?>

<?php echo $this->element('comments'); ?>