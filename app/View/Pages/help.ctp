<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Help"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Help</h1></div>

<h3>General documentation</h3>

<p>Academic is built upon CakePHP 2.1.0 and Bootstrap 2.0.2. code. You can find specific documentation here :</p>

<ul>
	<li><a href="http://book.cakephp.org/2.0/en/">CakePHP 2.0 documentation</a></li>
	<li><a href="http://api20.cakephp.org/classes">CakePHP 2.0 API</a></li>
	<li><a href="http://twitter.github.com/bootstrap/index.html">Bootstrap documentation</a></li>
</ul>

<div class="centered">
<h2 style="margin-top: 20px;">Install in 6 steps</h2>
</div>

<hr>

<h4>Step 1</h4>
<p>Download academic and upload it to your ftp.</p>

<hr>
<h4>Step 2</h4>
<p>Edit <code>/app/Config/database.php</code> to enter your database info.</p>

<hr>

<h4>Step 3</h4>
<p>Connect to your MySQL database and execute these requests :</p>

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

<hr>

<h4>Step 4</h4>
<p>Got to <code>/app/Config/core.php</code> and change 'Security.salt' (line 187) and 'Security.cipherSeed' (line 192).</p>

<hr>

<h4>Step 5</h4>
<p>When you're done, browse to <code>yoursite.com/users/add/</code> and register your admin account.</p>

<hr>

<h4>Step 6</h4>
<p>After having created your admin account, go to <code>/app/Controller/UsersControler</code> and replace line 19 <code>$this->Auth->allow('add','login','logout');</code> by <code>$this->Auth->allow('login','logout');</code></p>
 
 <hr>
 
 <div class="centered">
 <p><b>It's done ! Your blog is up and 100% secure.</b></p>
 </div>
