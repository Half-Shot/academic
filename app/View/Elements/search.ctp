<?php
echo $this->Form->create('Post', array(
	'class' => 'form well form-search"',
	'action' => 'search',
)); ?>

<table>
	<tr>
	<td><?php echo $this->Form->input('Search.input', array(
	 	'label' => false,
	 	'style' => 'width:340px; margin-right:10px;',
		'class' => 'input search-query')); 
	?></td>
	<td><?php echo ("<input type='submit' class='btn' value='Search'>"); ?></td>
	</tr>
</table>
</form>