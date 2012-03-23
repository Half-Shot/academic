<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout", $post['Post']['title']); ?>

<div class="centered">
<h2><?php echo h($post['Post']['title'])?> <?php if(($post['Post']['format']) == 'link') {
echo ("<img src='http://localhost:8888/academic/img/external_black.gif' alt='' width='25' height='25' style='margin-top: -8px'>");
}
?></h2>
<p><i><small>Written <?php echo $post['Post']['created']?></small></i></p>
</div>

<div class="post-body">
<?php echo ($post['Post']['body'])?>
</div>

<?php echo $this->element('legal'); ?>

<?php echo $this->element('comments'); ?>