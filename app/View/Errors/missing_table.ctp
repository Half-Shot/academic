<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Welcome to academic - Step 2"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Welcome to academic</h1>
<p>We will guide you through the installation process.</p>
</div>

<hr>

<div class="centered">
<h3>Step 2</h3>
<div class="progress progress-striped
     active">
  <div class="bar"
       style="width: 50%;"></div>
</div>

<p style="margin-top: 35px; margin-bottom: 35px;">We now need to create the database tables that will be used by academic. Please login to your mysql database and run the following SQL requests :</p>
</div>

<pre>
/* Create the posts table: */
CREATE TABLE posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  body TEXT,
  created DATETIME DEFAULT NULL,
  format VARCHAR(20) DEFAULT NULL
);

/* Insert two default publications: */
INSERT INTO posts (title,body,created,format)
  VALUES ('A link article', 'This is a link article.', NOW(), 'link');
INSERT INTO posts (title,body,created,format)
  VALUES ('A standard article', 'This is a standard article.', NOW(), 'standard');
</pre>
		      
<p>and :</p>
		      
<pre>
/* Create the users table: */
CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50),
  role VARCHAR(20),
  created DATETIME DEFAULT NULL
);
</pre>

<div class="centered">
<p style="margin-top: 40px;">When it's done click next</p>

<p><a href="javascript:this.location.reload();" class="btn btn-primary">Next</a></p>

<p><small>Note: if it doesn't work, manually refresh the page.</small></p>

</div>

<div class="alert alert-info" style="margin-top: 30px;">
 <p><b>If you already installed academic</b>, you may be viewing this message because the tables of your database have been altered or deleted. For more information, please check the <a href="http://academic-cms.github.com/documentation.html">documentation</a></p>
</div>