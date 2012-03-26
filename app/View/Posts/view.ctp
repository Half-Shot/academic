<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout", $post['Post']['title']); ?>
<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<div class="centered">
<h2><?php echo h($post['Post']['title'])?> <?php if(($post['Post']['format']) == 'link') {
echo ("→");
}
?></h2>
<p><i><small>Written <?php echo $post['Post']['created']?></small></i></p>
</div>

<div class="post-body">
<?php echo Markdown(($post['Post']['body']))?>
</div>

<?php 
$editlink = $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); 
 ?>

<p style="margin-top: 15px; text-align: center;"><i class="icon-download-alt"></i> <?php echo $this->Html->link('Download as PDF', array('action'=>'view', 'ext'=>'pdf', $post['Post']['id'])); ?> - <a href="http://twitter.com/?status=<?php echo Router::url($this->here, true); ?>"><i class="icon-retweet"></i> Tweet this</a> <?php 
if ('admin' == $this->Session->read('Auth.User.role')) {
	echo ("- <i class='icon-edit'></i> $editlink");
} ?> </p>

<?php echo $this->element('legal'); ?>

<?php echo $this->element('comments'); ?>