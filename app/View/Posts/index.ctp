<?php $this->layout = 'academic'; ?>

<!-- Define SEO variables. Go to /app/Config/boostrap.php to edit -->
<?php $siteName = (Configure::read('Site.name')); ?>

<?php $this->set("title_for_layout","Publication archives - $siteName"); ?>

		<div class='centered'><h1 style="margin-bottom: 20px;">Archives</h1></div>
		
		<table class="table table-striped">
		    <tr>
		        <th>Title</th>
		        <th style="width: 135px;">Published</th>
		        <?php 
		        if ('admin' == $this->Session->read('Auth.User.role')) {
		        	echo ("<th style='width:80px'>Admin.</th>");
		        } elseif ($this->Session->check('Auth.User.id')) {
		        	echo ("<th style='width:80px'>Admin.</th>");
		        } ?>
		    </tr>
		
		<!-- Here's where we loop through our $posts array, printing out post info -->
		
		    <?php foreach ($posts as $post): ?>
		    <?php 
		    $editlink = $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); 
		    $deletelink = $this->Form->postLink(
		        'Delete',
		        array('action' => 'delete', $post['Post']['id']),
		        array('confirm' => 'Are you sure you want to delete this publication?'));     
		    ?>
		    
		    <tr>
		        <td>
		            <?php if (($post['Post']['format']) == 'status') {
		            	echo ("#");
		            }; ?> <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?> <?php if(($post['Post']['format']) == 'link') {
		            	echo ("→");
		            } ?>
		        </td>
		        <td>
		            <?php echo $post['Post']['created']; ?>
		        </td>
		        <?php if ('admin' == $this->Session->read('Auth.User.role')) {
		        		echo ("<td>$editlink / $deletelink</td>");
		        	} elseif ($post['Post']['ownerid'] == $this->Session->read('Auth.User.id')) {
		        		echo("<td>$editlink / $deletelink</td>");
		        	} elseif ($this->Session->check('Auth.User.id')) {
		        		echo("<td><span class='muted'>Not owned</span></td>");
		        	} ?>
		    </tr>
		    <?php endforeach; ?>
		
		</table>
		
		<div class='centered'>
		<?php echo $this->Paginator->prev(); ?> 
		<?php echo $this->Paginator->numbers(); ?> 
		<?php echo $this->Paginator->next(); ?>
		</div>