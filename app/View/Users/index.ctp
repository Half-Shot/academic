<?php $this->layout = Configure::read('Site.layout'); ?>
<?php $siteName = (Configure::read('Site.name')); ?>
<?php $this->set("title_for_layout","Authors - $siteName"); ?>

<?php App::import('Vendor', 'markdown/markdown-extra'); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Registered user(s)</h1></div>

<p><a class="btn btn-mini btn-success" href="<?php echo $this->Html->url('/users/add/'); ?>">Add an user</a></p>

<table class="table table-striped">

<tr>
	<th><?php echo $this->Paginator->sort('id');?></th>
	<th><?php echo $this->Paginator->sort('pseudo');?></th>
	<th><?php echo $this->Paginator->sort('email');?></th>
	<th><?php echo $this->Paginator->sort('created');?></th>
	<th style="width: 75px;"><?php echo $this->Paginator->sort('role');?></th>
</tr>
			
<?php foreach ($users as $user): ?>

<?php 
$profileLink = $user['User']['id'];
$editlink = $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); 
$deletelink = $this->Form->postLink(
     'Delete',
     array('action' => 'delete', $user['User']['id']),
     array('confirm' => 'Are you sure you want to delete this user?'));     
 ?>
<tr>
    <td><code><?php echo $user['User']['id']; ?></code></td>
    <td><?php echo $this->Html->link($user['User']['pseudo'], array('action' => 'view', $user['User']['id']));?></td>
    <td><?php echo ("<a href='mailto:".$user['User']['email']."'>".$user['User']['email']."</a>"); ?></td>
    <td><span class="muted"><?php echo $user['User']['created']; ?></span></td>
    <td>
    	<div class='btn-group'>
          <a class='btn btn-mini' href='#'><?php echo $user['User']['role']; ?></a>
          <a class='btn btn-mini dropdown-toggle' data-toggle='dropdown' href='#'><span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><?php echo $editlink ?></li>
            <li><?php echo $deletelink ?></li>
          </ul>
    	</div>
    </td>
</tr>

<?php endforeach; ?>

</table>

<div class='centered'>
<?php 
if ($this->Paginator->hasPage(2)) {
	echo ("<hr>"); 
	echo $this->Paginator->prev();
	echo (" | ");
} ?> 
<?php echo $this->Paginator->numbers(); ?> 
<?php 
if ($this->Paginator->hasPage(2)) { 
	echo (" | ");
	echo $this->Paginator->next();
} ?> 
</div>