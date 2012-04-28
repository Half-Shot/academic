<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Error 500"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;"><?php echo $name; ?></h1></div>

<p><?php echo __d('cake', 'Error'); ?>: <?php echo __d('cake', 'An Internal Error Has Occurred.'); ?>
</p>

<?php
if (Configure::read('debug') > 0 ):
	echo $this->element('exception_stack_trace');
endif;
?>

<hr>

<div class="centered">
	<p><a href="<?php echo $this->Html->url('/'); ?>">Return to homepage</a></p>
</div>