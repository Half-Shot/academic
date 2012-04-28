<?php $gravatar = md5(strtolower(trim($post['User']['email']))); ?>
<div class="well" id="author" style="margin-top: 20px;">
	<table>
		<tr>
			<td><img src="<?php echo("http://www.gravatar.com/avatar/".$gravatar."?s=40") ?>" style="margin-right: 10px;" alt="" /></td>
			<td style="text-align: justify;"><?php echo $post['User']['about'] ?></td>
		</tr>
	</table>
</div>