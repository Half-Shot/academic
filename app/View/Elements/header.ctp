<a href="<?php echo $this->Html->url('/'); ?>" title="Home" class="fn"><img src="<?php echo $this->Html->url('/img/logo.png'); ?>" width="500" height="100" alt=""></a>

<div style="padding: 5px; background: #FBFBFB; border-top: 1px solid #EAEAEA; border-bottom: 1px solid #EAEAEA; text-align: center; margin-bottom: 5px; margin-top: 20px; color: #999999;">
<h4 style="text-transform:uppercase; font-weight: 300;">
<a href="<?php echo $this->Html->url('/pages/about/'); ?>">About</a> • 
<a href="<?php echo $this->Html->url('/users/'); ?>">Author(s)</a> • 
<a href="<?php echo $this->Html->url('/contacts/'); ?>">Contact</a> • 
<a href="<?php echo $this->Html->url('/posts/'); ?>">Archives</a> • 
<a href="<?php echo $this->Html->url('/pages/links/'); ?>">Links</a>
<?php 
$login = $this->Html->url('/users/login/');
if ($this->Session->check('Auth.User.id')) {
	echo ("");
} else {
	echo (" • <a href='$login'>Login</a>");
}
 ?>
</h4>
</div>

<div class="centered">
<!-- To edit your site description, go to /app/View/Elements/header.ctp -->
<p style="font-size: 1.15em; color: #999999; margin-top: 30px; margin-bottom: 30px; font-weight: 300;">
<?php echo(Configure::read('Site.description')); ?>
</p>
</div>

<hr>