<?php $this->layout = 'academic'; ?>
<?php $siteName = (Configure::read('Site.name')); ?>
<?php $this->set("title_for_layout","Authors - $siteName"); ?>

<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Author(s)</h1></div>
			
<?php foreach ($users as $user): ?>
<?php 
$gravatar = md5(strtolower(trim($user['User']['email'])));
$profileLink = $user['User']['id'];
 ?>
<h3>About <?php echo $user['User']['pseudo']; ?></h3>
<table class="table table-striped">
<tr>
    <td style="width: 50px;"><a href="<?php echo $this->Html->url('/users/view/'.$profileLink); ?>"><img src="http://www.gravatar.com/avatar/<?php echo $gravatar ?>?s=50" width='50' height='50'></a></td>
    <td style="text-align: justify;"><?php echo Markdown($user['User']['userbio']) ?></td>
</tr>
</table>

<?php endforeach; ?>