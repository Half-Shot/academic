<?php $this->layout = Configure::read('Site.layout'); ?>

<?php $siteName = (Configure::read('Site.name')); ?>

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
<p><i><small>Written <?php echo $post['Post']['created'] ?> by
<?php 
if ((Configure::read('Author.info')) != 'no') {
	echo ("<a href='#author'>".$post['User']['pseudo']."</a>");
} else {
	echo ($post['User']['pseudo'] );
} ?>
</small></i></p>
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
if ((Configure::read('Author.info')) != 'no') {
	echo $this->element('author_info'); 
} ?>

<hr>

<p style="text-align: center; color: #999999;"><i class="icon-download-alt"></i> <?php echo $this->Html->link('Download PDF', array('action'=>'view', 'ext'=>'pdf', $post['Post']['id']), array('rel' => 'nofollow')); ?> - <a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4f8947e47c1964dd"><i class="icon-retweet"></i> Share</a></p>
<p>

<hr>

<?php 
if ((Configure::read('Disqus.id')) != 'none') {
	echo $this->element('comments'); 
} ?>

<div class="centered">
<p><small><?php echo $post['User']['licence'] ?></small></p>
</div>

<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f8947e47c1964dd"></script>