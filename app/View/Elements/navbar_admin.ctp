<body style="margin-top: 40px;">

<?php 
$loggedUserEmail = $this->Session->read('Auth.User.email');
$loggedUserId = $this->Session->read('Auth.User.id');
?>

<div class="navbar navbar-fixed-top" style="font-size: 13px;">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo $this->Html->url('/'); ?>">academic*</a>
        <ul class="nav">
        	<li><a href="<?php echo $this->Html->url('http://academic-cms.github.com/'); ?>"><i class="icon-question-sign icon-white"></i> About</a></li>
        	<li><a href="<?php echo $this->Html->url('https://github.com/academic-cms/academic/wiki'); ?>"><i class="icon-info-sign icon-white"></i> Documentation</a></li>
        </ul>
        <ul class="nav pull-right">
          <li id="fat-menu" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?php echo $loggedUserEmail ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $this->Html->url('/posts/add/'); ?>"><i class="icon-pencil icon-black"></i> Publish</a></li>
              <li><a href="<?php echo $this->Html->url('/pages/add/'); ?>"><i class="icon-file icon-black"></i> New page</a></li>
              <li><a href="<?php echo $this->Html->url('/users/edit/'.$loggedUserId); ?>"><i class="icon-user icon-black"></i> Edit your info</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $this->Html->url('/users/'); ?>"><i class="icon-user icon-black"></i> Manage users</a></li>
              <li><a href="<?php echo $this->Html->url('/settings/'); ?>"><i class="icon-cog icon-black"></i> Edit settings</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $this->Html->url('/settings/clearCache/'); ?>"><i class="icon-trash icon-black"></i> Clear all cache</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $this->Html->url('/users/logout/'); ?>"><i class=" icon-off icon-black"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</div>