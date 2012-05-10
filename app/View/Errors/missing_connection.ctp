<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Welcome to academic - Step 1"); ?>

<div class='centered'>
<h1>Welcome to academic <small>(1/2)</small></h1>
<p>We will guide you through the installation process.</p>
</div>

<hr>

<h3>Server</h3>

<p>
<?php
	if (version_compare(PHP_VERSION, '5.2.8', '>=')):
		echo "<div class='alert alert-success'>";
			echo __d('cake_dev', 'Your version of PHP is 5.2.8 or higher.');
		echo '</div>';
	else:
		echo "<div class='alert alert-error'>";
			echo __d('cake_dev', 'Your version of PHP is too low. You need PHP 5.2.8 or higher to use CakePHP.');
		echo '</div>';
	endif;
?>
</p>
<p>
	<?php
		if (is_writable(TMP)):
			echo "<div class='alert alert-success'>";
				echo __d('cake_dev', 'Your tmp directory is writable.');
			echo '</div>';
		else:
			echo "<div class='alert alert-error'>";
				echo __d('cake_dev', 'Your tmp directory is NOT writable.');
			echo '</div>';
		endif;
	?>
</p>
<p>
	<?php
		$settings = Cache::settings();
		if (!empty($settings)):
			echo "<div class='alert alert-success'>";
				echo __d('cake_dev', 'The %s is being used for core caching.', '<em>'. $settings['engine'] . 'Engine</em>');
			echo '</div>';
		else:
			echo "<div class='alert alert-error'>";
				echo __d('cake_dev', 'Your cache is NOT working. Please check the settings in APP/Config/core.php');
			echo '</div>';
		endif;
	?>
</p>

<hr>

<h3>Cache check</h3>

<?php 
if ((Configure::read('Cache.check')) == '1'):
	echo "<div class='alert alert-success'>";
			echo ('<em>Cache.check</em> is activated.');
		echo '</div>';
	else:
		echo "<div class='alert alert-error'>";
			echo ("<em>Cache.check</em> is not activated. Please look for <em>Cache.check</em> in APP/Config/core.php line 130.");
		echo '</div>';
	endif;
 ?>

<hr>

<h3>Security</h3>

<p>
<?php 
if ((Configure::read('Security.salt')) != '123aCaDeMiC456aCaDeMiC789'):
	echo "<div class='alert alert-success'>";
			echo ('<em>Security.salt</em> key set to '.Configure::read('Security.salt'));
		echo '</div>';
	else:
		echo "<div class='alert alert-error'>";
			echo ("Please edit your <em>Security.salt</em> key in APP/Config/core.php and refresh this page.");
		echo '</div>';
	endif;

if ((Configure::read('Security.cipherSeed')) != '12345678901234567890'):
	echo "<div class='alert alert-success'>";
			echo ('<em>Security.cipherSeed</em> key set to '.Configure::read('Security.cipherSeed'));
		echo '</div>';
	else:
		echo "<div class='alert alert-error'>";
			echo ("Please edit your <em>Security.cipherSeed</em> key in APP/Config/core.php and refresh this page.");
		echo '</div>';
	endif;
?>
</p>

<hr>

<h3>Database configuration</h3>

<p style="margin-top: 20px;">Edit via ftp the file <code>/app/Config/database.php</code> to enter your database info. When it's done click next.</p>

<hr>

<div class='centered'>
<p><a href="javascript:this.location.reload();" class="btn btn-primary">Next</a></p>
<p><small>Note: if it doesn't work, manually refresh the page.</small></p>
</div>