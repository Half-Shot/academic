<?php $gravatar = md5(strtolower(trim($post['User']['email']))); ?>

<div class="well" id="author" style="margin-top: 20px;">
	<table>
		<tr>
			<td><img src="<?php echo("http://www.gravatar.com/avatar/".$gravatar."?s=55") ?>" style="margin-right: 10px;" alt="" /></td>
			<td style="text-align: justify;"><?php echo String::truncate((strip_tags(Markdown($post['User']['about']))), 160,array('ending' => ' (...) ')); ?> <?php echo $this->Html->link('View profile →', array('controller' => 'users', 'action' => 'view', $post['Post']['user_id'])); ?></td>
		</tr>
	</table>
</div>