<?php $this->layout = Configure::read('Site.layout'); ?>

<?php
//no user registered
if (empty($users)) {
	echo $this->element('add_user');
// is admin
} elseif ($this->Session->read('Auth.User.role') == 'admin') {
	echo $this->element('add_user');
//not admin
} else {
	echo ("
		<div class='alert alert-error'>
		  <div class='centered'>
		  <h3>NOT ALLOWED</h3>
		  <p>Only administrators can add new users.</p>
		  </div>
		</div>
	");
}

?>