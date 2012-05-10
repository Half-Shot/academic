<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title_for_layout; ?></title>
    <meta name="author" content="<?php echo(Configure::read('site.author')); ?>">
    <meta name="generator" content="academic*">

    <!-- Styles -->
    <link href="<?php echo $this->Html->url('/css/bootstrap.css'); ?>" rel="stylesheet">
    <?php echo $scripts_for_layout; ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $this->Html->url('/img/favicon.ico'); ?>">
    
    <?php 
    if ((Configure::read('Google.analytics')) != 'none') {
    	echo $this->element('analytics'); 
    } ?>
    
  </head>

    <!--nocache-->
    <?php 
    if ('admin' == $this->Session->read('Auth.User.role')) {
    	echo $this->element('navbar_admin');
    } elseif ($this->Session->check('Auth.User.id')) {
    	echo $this->element('navbar_author');
    } else {
    	echo('<body>');
    } ?>
    <!--/nocache-->

    <div class="container">
    
		<div class="content">
		<!--nocache-->		
		<?php echo $this->Session->flash(); ?>
		<!--/nocache-->
		<?php echo $this->element('header'); ?>
		<?php echo $this->fetch('content'); ?>
			    
		</div>
		
		<footer style="margin-top: 20px; margin-bottom: 15px; text-align: center;">
		    <p><small><a href="<?php echo $this->Html->url('/posts.rss'); ?>">RSS</a> - Powered by <a href="http://academic-cms.github.com/">academic*</a></small></p>
		</footer>
      
    </div>
    
    <!-- Javascript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->Html->url('/js/bootstrap-transition.js'); ?>"></script>
    <script src="<?php echo $this->Html->url('/js/bootstrap-dropdown.js'); ?>"></script>
    <script src="<?php echo $this->Html->url('/js/bootstrap-tab.js'); ?>"></script>
    <script src="<?php echo $this->Html->url('/js/bootstrap-modal.js'); ?>"></script>
    
    <!--nocache-->   
	<?php 
	if (('admin' == $this->Session->read('Auth.User.role')) && (Configure::read('debug') > 0)) {
		echo ($this->element('sql_dump'));
	} ?>
	<!--/nocache-->

  </body>
</html>

<!-- Powered by academic* - Download : <http://academic-cms.github.com/> -->