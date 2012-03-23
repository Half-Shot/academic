<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Blog archives"); ?>

		<div class='centered'><h1 style="margin-bottom: 20px;">Archives</h1></div>
		
		<table class="table table-striped">
		    <tr>
		        <th>Title</th>
		        <th>Published</th>
		        <?php 
		        if ('admin' == $this->Session->read('Auth.User.role')) {
		        	echo ("
		        
		        <th>Admin.</th>
		        
		        ");
		        } ?>
		    </tr>
		
		<!-- Here's where we loop through our $posts array, printing out post info -->
		
		    <?php foreach ($posts as $post): ?>
		    <?php 
		    $editlink = $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); 
		    $deletelink = $this->Form->postLink(
		        'Delete',
		        array('action' => 'delete', $post['Post']['id']),
		        array('confirm' => 'Are you sure?'));     
		    ?>
		    
		    <tr>
		        <td>
		            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
		        </td>
		        <td>
		            <?php echo $post['Post']['created']; ?>
		        </td>
		        <?php if ('admin' == $this->Session->read('Auth.User.role')) {
		        	echo ("
		        	
		        <td>$editlink / $deletelink</td>
		        
		        ");
		        } ?>

		    </tr>
		    <?php endforeach; ?>
		
		</table>
		
		<div class='centered'>
		<?php echo $this->Paginator->prev(); ?> 
		<?php echo $this->Paginator->numbers(); ?> 
		<?php echo $this->Paginator->next(); ?>
		</div>