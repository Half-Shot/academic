<?php $this->layout = 'academic'; ?>
<?php $siteName = (Configure::read('Site.name')); ?>
<?php $this->set("title_for_layout","Author info - $siteName"); ?>

<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<?php $gravatar = md5(strtolower(trim($user['User']['email']))); ?>

<div class="centered"><h1 style="margin-bottom: 20px;"><?php echo $user['User']['pseudo']; ?></h1></div>

<h3>About</h3>

<table class="table table-striped">
<tr>
    <td style="width: 50px;"><img src="http://www.gravatar.com/avatar/<?php echo $gravatar ?>?s=50" width='50' height='50'></td>
    <td style="text-align: justify;"><?php echo Markdown($user['User']['userbio']) ?></td>
</tr>
</table>