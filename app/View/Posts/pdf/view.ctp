<? App::import('Vendor', 'markdown/markdown-extra'); ?>

<h1><?php echo h($post['Post']['title'])?></h1>
<p>Written : <?php echo $post['Post']['created']?></p>
<p>Source : <?php echo dirname(WWW_ROOT); ?></p>

<hr>

<p style="text-align: justify;"><?php echo Markdown($post['Post']['body'])?></p>

<?php echo $this->element('legal'); ?>

