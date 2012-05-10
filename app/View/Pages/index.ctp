<?php $this->layout = Configure::read('Site.layout'); ?>
<?php $siteName = (Configure::read('Site.name')); ?>
<?php $this->set("title_for_layout","Pages - $siteName"); ?>
<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

		<div class='centered'><h1 style="margin-bottom: 20px;">Page list</h1></div>
		
		<table class="table table-striped">
		    <tr>
		        <th><?php echo $this->Paginator->sort('title');?></th>
		        <th>Content preview</th>
		        <?php 
		        if ('admin' == $this->Session->read('Auth.User.role')) {
		        	echo ("<th style='width:40px'>Admin.</th>");
		        } elseif ($this->Session->check('Auth.User.id')) {
		        	echo ("<th style='width:40px'>Admin.</th>");
		        } ?>
		    </tr>
		
		    <?php foreach ($pages as $page): ?>
		    <?php 
		    $editlink = $this->Html->link('Edit', array('action' => 'edit', $page['Page']['id'])); 
		    $deletelink = $this->Form->postLink(
		        "Delete",
		        array('action' => 'delete', $page['Page']['id']),
		        array('confirm' => 'Are you sure you want to delete this page?')); 
		    $preview = String::truncate((strip_tags(Markdown($page['Page']['body']))), 200,array('ending' => ' (...)'));    
		    ?>
		    
		    <tr>
		        <td><?php echo $this->Html->link($page['Page']['title'], '../page/'.$page['Page']['slug']); ?></td>
		        <td style="text-align: justify;"><?php echo $preview ?></td>
		        <?php if ('admin' == $this->Session->read('Auth.User.role')) {
		        		echo ("<td><div class='btn-group'>
		        		      <a class='btn btn-mini' href='#'><i class='icon-cog'></i></a>
		        		      <a class='btn btn-mini dropdown-toggle' data-toggle='dropdown' href='#'><span class='caret'></span></a>
		        		      <ul class='dropdown-menu'>
		        		        <li>$editlink</li>
		        		        <li>$deletelink</li>
		        		      </ul>
		        			</div></td>");
		        	} ?>
		    </tr>
		    <?php endforeach; ?>
		
		</table>
		
		<div class='centered'>
		<?php 
		if ($this->Paginator->hasPage(2)) {
			echo $this->Paginator->prev();
			echo (" | ");
		} ?> 
		<?php echo $this->Paginator->numbers(); ?> 
		<?php 
		if ($this->Paginator->hasPage(2)) { 
			echo (" | ");
			echo $this->Paginator->next();
			echo ("<hr>"); 
		} ?> 
		</div>