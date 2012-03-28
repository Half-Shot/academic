<div class="alert alert-error">
<h3 style="text-align: center;">IMPORTANT</h3>
<p style="text-align: center;"><b>Before creating your account</b>, you must read <a href="https://github.com/academic-cms/academic/wiki/Creating-an-admin-account">this guide.</a></p>
</div>

<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add and admin account'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>