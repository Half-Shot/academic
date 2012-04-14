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
       style="width: 66%;"></div>
</div>

<p style="margin-top: 35px; margin-bottom: 35px;">We now need to create the database tables that will be used by academic. Please login to your mysql database and run the following SQL request:</p>
</div>

<pre>
/* Create the posts table: */
CREATE TABLE posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  body TEXT,
  created DATETIME DEFAULT NULL,
  format VARCHAR(20) DEFAULT NULL,
  ownerid INT
);

/* Insert two default publications: */
INSERT INTO posts (title,body,created,format,ownerid)
  VALUES ('An image article', 'http://placehold.it/500x300.', NOW(), 'image', '1');
INSERT INTO posts (title,body,created,format,ownerid)
  VALUES ('A link article', 'This is a link article.', NOW(), 'link', '1');
INSERT INTO posts (title,body,created,format,ownerid)
  VALUES ('A status article', 'This is a status article.', NOW(), 'status', '1');
INSERT INTO posts (title,body,created,format,ownerid)
  VALUES ('A standard article', 'This is a standard article.', NOW(), 'standard', '1');

/* Create the users table: */
CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(150),
  pseudo VARCHAR(250),
  password VARCHAR(50),
  role VARCHAR(20),
  userbio TEXT,
  created DATETIME DEFAULT NULL
);
  
/* Create the settings table: */
CREATE TABLE settings (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150),
  value VARCHAR(300)
);

/* Insert settings values: */
INSERT INTO settings (name,value)
  VALUES ('Site.name', 'Academic blog');
INSERT INTO settings (name,value)
  VALUES ('Site.description', 'The minimalist blog CMS');
INSERT INTO settings (name,value)
  VALUES ('Site.email', 'site@email.com');
INSERT INTO settings (name,value)
  VALUES ('Google.analytics', 'Your UA');
</pre>

<div class="centered">
<p style="margin-top: 40px;">When it's done click finish.</p>

<p><a href="javascript:this.location.reload();" class="btn btn-primary">Finish</a></p>

<p><small>Note: if it doesn't work, manually refresh the page.</small></p>

</div>

<hr>

<div class="alert alert-info" style="margin-top: 30px;">
 <p><b>If you already installed academic</b>, you may be viewing this message because :
 	 <ul>
 	 	<li>the tables of your database have been altered or deleted</li>
 	 </ul> 
 For more information, please check the <a href="https://github.com/academic-cms/academic/wiki">documentation</a></p>
</div>