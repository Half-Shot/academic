<?php $this->layout = 'academic'; ?>

<?php
if (!empty($users)) {
	echo $this->element('users_already');
} else {
	echo $this->element('users_add');
} ?>