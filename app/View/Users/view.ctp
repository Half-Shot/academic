<?php $this->layout = Configure::read('Site.layout'); ?>
<?php $siteName = (Configure::read('Site.name')); ?>
<?php $pageName = ($user['User']['pseudo']); ?>
<?php $this->set("title_for_layout", "$pageName - $siteName"); ?>
<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<div class="centered"><h1 style="margin-bottom: 20px;">About <?php echo $user['User']['pseudo'] ?></h1></div>

<p><?php echo $user['User']['about'] ?></p>

<hr>

<h3>Latest 10 publications</h3>

<table class='table table-striped'>

	<tr>
		<th>Name</th>
		<th style="width: 140px;">Published</th>
	</tr>

<?php 
if (!empty($user['Post'])) {
	foreach ($user['Post'] as $post) {  
		$postLink = $this->Html->link($post['title'], "../post/".$post['slug']);  
		echo ("
			
			<tr>
				<td>$postLink</td>
				<td><span class='muted'>".$post['created']."</span></td>
			</tr>
		");
	}
} else {
	echo ("<tr><td>This user has published no posts yet.</td><td></td></tr>");
} ?>
 
</table>