<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Settings"); ?>

<div class='centered'>

<h1 style="margin-bottom: 30px;">Settings</h1>

<p><b>Your current favicon is :</b></br><img src="<?php echo $this->Html->url('/img/favicon.ico'); ?>" alt="" /></p>
<p>You can change it by editing <code>/app/webroot/img/favicon.ico</code></p>

<hr>

<p><b>Your current logo is :</b></br><img src="<?php echo $this->Html->url('/img/logo.png'); ?>" alt="" width="30%" height="30%" /></p>
<p>You can change it by editing <code>/app/webroot/img/logo.png</code></p>

</div>