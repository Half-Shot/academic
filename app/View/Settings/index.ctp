<?php $this->layout = Configure::read('Site.layout'); ?>

<?php $siteName = (Configure::read('Site.name')); ?>

<?php $this->set("title_for_layout","Settings - $siteName"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Settings</h1></div>

<ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#settings" data-toggle="tab">Site settings</a></li>
    <li class=""><a href="#server" data-toggle="tab">Server config</a></li>
</ul>

<div id="myTabContent" class="tab-content">

    <div class="tab-pane active in" id="settings">
      <h3>Main settings</h3>
      
      <table class="table table-striped">
          <tr>
              <th>Setting name</th>
              <th>Current value</th>
              <th>Edit</th>
          </tr>
      
          <?php foreach ($settings as $setting): ?>
        
          
          <tr>
              <td><code><?php echo $setting['Setting']['name']; ?></code></td>
              <td><?php echo $setting['Setting']['value']; ?></td>
              <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $setting['Setting']['id'])); ?></td>
          </tr>
          <?php endforeach; ?>
      
      </table>
      
      <h3>Other settings</h3>
      
      <table class="table table-striped">
      
          <tr>
              <td>FTP path to your logo</td>
              <td><code>app/webroot/img/logo.png</code></td>
              <td><a href="<?php echo $this->Html->url('/img/logo.png'); ?>">View</a></td>
          </tr>
          <tr>
              <td>FTP path to your favicon</td>
              <td><code>app/webroot/img/favicon.ico</code></td>
              <td><a href="<?php echo $this->Html->url('/img/favicon.ico'); ?>">View</a></td>
          </tr>
          <tr>
              <td>Url to your sitemap</td>
              <td><code>/posts.xml</code></td>
              <td><a href="<?php echo $this->Html->url('/posts.xml'); ?>">View</a></td>
          </tr>
          <tr>
              <td>Url to your RSS feed</td>
              <td><code>/posts.rss</code></td>
              <td><a href="<?php echo $this->Html->url('/posts.rss'); ?>">View</a></td>
          </tr>
          
      </table>
      
    </div>
    
    <div class="tab-pane" id="server">
      <h3>Mode</h3>
      
      <p>
      	<?php  
      		if (Configure::read('debug') == 0):
      			echo "<div class='alert alert-success'>";
      					echo ('Your website is in production mode.');
      				echo '</div>';
      			else:
      				echo "<div class='alert alert-block'>";
      					echo ("Your website is in debug mode (debug set to ".Configure::read('debug')."). You should set debug to 0 in APP/Config/core.php on line 35.");
      				echo '</div>';
      			endif;
      	?>
      </p>
      
      <h3>Security</h3>
      
      <?php 
      if ((Configure::read('Security.salt')) != '123aCaDeMiC456aCaDeMiC789'):
      	echo "<div class='alert alert-success'>";
      			echo ('<em>Security.salt</em> key was changed.');
      		echo '</div>';
      	else:
      		echo "<div class='alert alert-error'>";
      			echo ("<em>Security.salt</em> key in APP/Config/core.php was not changed.");
      		echo '</div>';
      	endif;
      
      if ((Configure::read('Security.cipherSeed')) != '12345678901234567890'):
      	echo "<div class='alert alert-success'>";
      			echo ('<em>Security.cipherSeed</em> key was changed.');
      		echo '</div>';
      	else:
      		echo "<div class='alert alert-error'>";
      			echo ("<em>Security.cipherSeed</em> key in APP/Config/core.php was not changed.");
      		echo '</div>';
      	endif;
      ?>
      
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
    </div>
       
    <h3>Version</h3>
    
    <?php 
    $data = file_get_contents('http://academic-cms.github.com/infos.xml');
    $response = Xml::build($data);
     ?>
     
	 <table class="table table-striped">
	 
	     <tr>
	         <td>Current academic* version</td>
	         <td><code><?php echo Configure::read('Academic.version'); ?></code></td>
	         <td><span class="muted">Published <?php echo Configure::read('Academic.published'); ?></span></td>
	     </tr>
	     <tr>
	         <td>Latest available version</td>
	         <td><code><?php echo $response->current; ?></code></td>
	         <td><span class="muted">Published <?php echo $response->published; ?></span></td>
	     </tr>

	     
	 </table>
    
</div>