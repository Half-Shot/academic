<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title_for_layout; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Styles -->
    <link href="<?php echo $this->Html->url('/css/bootstrap.css'); ?>" rel="stylesheet">
    <?php echo $scripts_for_layout; ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $this->Html->url('/img/favicon.ico'); ?>">
    
    <?php echo $this->element('analytics'); ?>
    
  </head>

    <?php 
    if ($this->Session->check('Auth.User.id')) {
    	echo $this->element('topbar');
    } else {
    	echo('<body>');
    }
    ?>

    <div class="container">
    
    	<div class="content">
    			
    		    <?php echo $this->Session->flash(); ?>
    		    <?php echo $this->element('header'); ?>
    		    <?php echo $this->fetch('content'); ?>
    		    
        </div>

      <footer style="margin-top: 20px; margin-bottom: 15px; text-align: center;">
        <p><small><a href="<?php echo $this->Html->url('/posts/index.rss'); ?>">RSS</a> - Powered by <a href="https://github.com/academic-cms/academic">Academic</a></small></p>
      </footer>
      
     </div>
    
    <!-- Javascript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $this->Html->url('/js/bootstrap-dropdown.js'); ?>"></script>

  </body>
</html>

<!-- 

Powered by Academic 0.9

Copyright (C) 2012 Jean Fau

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

-->