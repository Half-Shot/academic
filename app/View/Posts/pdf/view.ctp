<h1><?php echo h($post['Post']['title'])?></h1>
<p>Written : <?php echo $post['Post']['created']?></p>
<p>Source : <?php echo Router::url($this->here, true); ?></p>

<hr>

<p style="text-align: justify;"><?php echo ($post['Post']['body'])?></p>

<?php echo $this->element('legal'); ?>

