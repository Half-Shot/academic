<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout", $post['Post']['title']); ?>

<div class="centered">
<h2><?php echo h($post['Post']['title'])?> <?php if(($post['Post']['format']) == 'link') {
echo ("→");
}
?></h2>
<p><i><small>Written <?php echo $post['Post']['created']?></small></i></p>
</div>

<div class="post-body">
<?php echo ($post['Post']['body'])?>
</div>

<p style="margin-top: 15px; text-align: center;"><i class="icon-download-alt"></i> <?php echo $this->Html->link('Download as PDF', array('action'=>'view', 'ext'=>'pdf', $post['Post']['id'])); ?></p>

<?php echo $this->element('legal'); ?>

<?php echo $this->element('comments'); ?>