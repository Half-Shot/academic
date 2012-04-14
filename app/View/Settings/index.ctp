<?php $this->layout = 'academic'; ?>

<?php $siteName = (Configure::read('Site.name')); ?>

<?php $this->set("title_for_layout","Settings - $siteName"); ?>

		<div class='centered'><h1 style="margin-bottom: 20px;">Settings <small><a href="https://github.com/academic-cms/academic/wiki/Site-settings">(?)</a></small></h1></div>
		
		<h2>Main settings</h2>
		
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
		
		<h2>Other settings</h2>
		
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