<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Error 400"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;"><?php echo $name; ?></h1></div>

<p><?php printf(
	__d('cake', 'The requested address %s was not found on this server.'),
	"<strong>'{$url}'</strong>"
); ?></p>

<?php
if (Configure::read('debug') > 0 ):
	echo $this->element('exception_stack_trace');
endif;
?>

<hr>

<div class="centered">
	<p><a href="<?php echo $this->Html->url('/'); ?>">Return to homepage</a></p>
</div>