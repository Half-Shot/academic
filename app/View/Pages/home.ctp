<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Academic"); ?>


<?php foreach ($posts as $post): ?>
	
	<div class="centered">
	<h2><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?> <?php if(($post['Post']['format']) == 'link') {
	echo ("→");
	}
	?></h2>
	<p><i><small>Written <?php echo $post['Post']['created']?></small></i></p>
	</div>
	
	<div class="post-body"><?php echo $post['Post']['body']; ?></div>
	
	<hr>

<?php endforeach; ?>

<div class='centered'>
<?php echo $this->Paginator->prev(); ?> 
<?php echo $this->Paginator->numbers(); ?> 
<?php echo $this->Paginator->next(); ?>
</div>

<?php echo $this->element('legal'); ?>