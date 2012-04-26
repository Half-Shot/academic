<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Missing controller"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Error : missing controller</h1></div>

<div class="centered">
<p>There is no controller file for the url you requested.</p>

</div>

<?php
if (Configure::read('debug') > 0 ):
	echo $this->element('exception_stack_trace');
endif;
?>