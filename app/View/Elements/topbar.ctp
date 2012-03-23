<body style="margin-top: 40px;">

<?php $loggedusername = $this->Session->read('Auth.User.username'); ?>

<div class="navbar navbar-fixed-top" style="font-size: 13px;">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo $this->Html->url('/'); ?>">academic</a>
        <ul class="nav">
          <li><a href="<?php echo $this->Html->url('/pages/help/'); ?>"><i class="icon-info-sign icon-white"></i> Help</a></li>
          <li><a href="<?php echo $this->Html->url('/pages/academic/'); ?>"><i class="icon-question-sign icon-white"></i> About academic</a></li>
        </ul>
        <ul class="nav pull-right">
          <li id="fat-menu" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?php echo $loggedusername ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $this->Html->url('/posts/add/'); ?>"><i class="icon-pencil icon-black"></i> Publish</a></li>
              <li><a href="<?php echo $this->Html->url('/pages/settings/'); ?>"><i class="icon-cog icon-black"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $this->Html->url('/users/logout/'); ?>"><i class=" icon-off icon-black"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</div>