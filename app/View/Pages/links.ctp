<?php $this->layout = 'academic'; ?>

<!-- Define SEO variables. Go to /app/Config/boostrap.php to edit -->
<?php $siteName = (Configure::read('Site.name')); ?>

<?php $this->set("title_for_layout","Links - $siteName"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Links</h1></div>

<div style="text-align: left;">

<h3>Link category 1</h3>

<p>
	<ul>
	    <li><a href="#">Link 1</a></li>
	    <li><a href="#">Link 2</a></li>
	    <li><a href="#">Link 3</a></li>
	</ul>
</p>

<h3>Link category 2</h3>

<p>
	<ul>
	    <li><a href="#">Link 1</a></li>
	    <li><a href="#">Link 2</a></li>
	    <li><a href="#">Link 3</a></li>
	</ul>
</p>

<h3>Link category 3</h3>

<p>
	<ul>
	    <li><a href="#">Link 1</a></li>
	    <li><a href="#">Link 2</a></li>
	    <li><a href="#">Link 3</a></li>
	</ul>
</p>

</div>

<?php 
if ($this->Session->read('Auth.User.role') == 'admin') {
	echo ("<div class='centered' style='margin-top:30px;'><p><p><i class='icon-info-sign'></i> To edit this page, go to <code>/app/View/Pages/links.ctp</code></p></div>");
} ?>