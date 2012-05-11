<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Welcome to academic - Step 2"); ?>

<div class='centered'><h1>Welcome to academic <small>(2/2)</small></h1>

<p>We will guide you through the installation process.</p>

<hr>

<p style="margin-top: 35px; margin-bottom: 35px;">We now need to create the database tables that will be used by academic. Please login to your mysql database and run the following SQL request:</p>
</div>

<pre>
/* Create the posts table: */
CREATE TABLE posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  slug VARCHAR(255),
  body TEXT,
  created DATETIME DEFAULT NULL,
  format VARCHAR(20) DEFAULT NULL,
  user_id INT
);

/* Insert a publication: */
INSERT INTO posts (title,slug,body,created,format,user_id)
  VALUES ('Welcome to academic*', 'welcome_to_academic', "You can edit or delete this publication by creating an administrator account &lt;a href='/users/add/'&gt;here&lt;/a&gt;.", NOW(), 'standard', '1');
  
/* Create the pages table: */
CREATE TABLE pages (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  slug VARCHAR(255),
  body TEXT,
  created DATETIME DEFAULT NULL
);

/* Insert two pages: */
INSERT INTO pages (title,slug,body,created)
  VALUES ('About', 'about', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dui metus, vitae auctor dolor. Fusce leo turpis, sagittis sed dignissim id, rhoncus ac diam. Nam suscipit rutrum venenatis. Donec mi urna, pharetra eget cursus ut, interdum in risus.', NOW());
INSERT INTO pages (title,slug,body,created)
  VALUES ('Links', 'links', '###Link category
  * [Link1](#)
  * [Link2](#)
  * [Link3](#)', NOW());

/* Create the users table: */
CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(150),
  pseudo VARCHAR(250),
  password VARCHAR(50),
  role VARCHAR(20),
  about TEXT,
  created DATETIME DEFAULT NULL
);
  
/* Create the settings table: */
CREATE TABLE settings (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  slug VARCHAR(255),
  value VARCHAR(300)
);

/* Insert settings values: */
INSERT INTO settings (name,value)
  VALUES ('Site.name', 'Academic blog');
INSERT INTO settings (name,value)
  VALUES ('Site.description', 'The minimalist blog CMS');
INSERT INTO settings (name,value)
  VALUES ('Site.email', 'academic@yourdomain.com');
INSERT INTO settings (name,value)
  VALUES ('Site.layout', 'academic');
INSERT INTO settings (name,value)
  VALUES ('Author.info', 'no');
INSERT INTO settings (name,value)
  VALUES ('Google.analytics', 'none');
INSERT INTO settings (name,value)
  VALUES ('Disqus.id', 'none');
INSERT INTO settings (name,value)
  VALUES ('Gripr.info', 'no');
</pre>

<hr>

<div class="centered">
<p style="margin-top: 40px;">When it's done click finish.</p>

<p><a href="javascript:this.location.reload();" class="btn btn-primary">Finish</a></p>

<p><small>Note: if it doesn't work, manually refresh the page.</small></p>

</div>