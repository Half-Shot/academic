<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Missing action"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Error : missing action</h1></div>

<div class="centered">
<p>There is no action defined for the controller you required.</p>

</div>

<?php
if (Configure::read('debug') > 0 ):
	echo $this->element('exception_stack_trace');
endif;
?>