<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add an account <small><a href=\'http://github.com/academic-cms/academic/wiki/Permissions-and-roles\'>(?)</a></small>'); ?></legend>
    <?php
        echo $this->Form->input('email');
        echo $this->Form->input('pseudo');
        echo $this->Form->input('password');
        echo $this->Form->input('userbio');
        echo $this->Form->input('role', array(
        	    'options' => array('admin' => 'Administrator', 'author' => 'Author')
        	));
    ?>
    </fieldset>
    
<?php echo $this->Form->end(__('Submit'));?>
</div>