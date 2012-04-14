<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Welcome to academic - Step 1"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Welcome to academic</h1></div>

<div class="centered">

<p>We will guide you through the installation process.</p>

<hr>

<h3>Step 1</h3>
<div class="progress progress-striped
     active">
  <div class="bar"
       style="width: 33%;"></div>
</div>

<p style="margin-top: 40px;">First of all, you must edit via ftp the file<code>/app/Config/database.php</code> to enter your database info. When it's done click next.</p>

<p><a href="javascript:this.location.reload();" class="btn btn-primary">Next</a></p>

<p><small>Note: if it doesn't work, manually refresh the page.</small></p>

</div>

<hr>

<div class="alert alert-info" style="margin-top: 30px;">
 <p><b>If you already installed academic</b>, you may be viewing this message because :
	 <ul>
	 	<li>your database is temporarily inaccessible</li>
	 	<li>your database server is down</li>
	 	<li>you have edited /app/Config/database.php</li>
	 </ul>
 For more information, please check <a href="https://github.com/academic-cms/academic/wiki">the documentation.</a></p>
</div>