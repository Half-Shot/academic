<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<h1><?php echo h($post['Post']['title'])?></h1>
<p>Written <?php echo $post['Post']['created']?> by <?php echo $post['User']['pseudo']?></p>
<p>Source : <?php echo Configure::read('Site.name'); ?>, <?php echo Router::url('/',true); ?></p>
<p>Download : <?php echo Router::url($this->here, true); ?></p>

<hr>

<p style="text-align: justify;"><?php echo Markdown($post['Post']['body'])?></p>

<hr>

<p><?php echo $post['User']['licence']?></p>

<p><qrcode value="<?php echo Router::url($this->here, true); ?>" ec="L" style="width: 35mm; background-color: white; color: black;"></qrcode></p>

