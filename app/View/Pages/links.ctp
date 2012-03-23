<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Links"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Links</h1></div>

<div style="text-align: left;">

<h3>Category 1</h3>

<p>
	<ul>
	    <li><a href="#">Link 1</a></li>
	    <li><a href="#">Link 2</a></li>
	    <li><a href="#">Link 3</a></li>
	</ul>
</p>
<h3>Category 2</h3>
<p>
	<ul>
	    <li><a href="#">Link 1</a></li>
	    <li><a href="#">Link 2</a></li>
	    <li><a href="#">Link 3</a></li>
	</ul>
</p>
<h3>Category 3</h3>
<p>
	<ul>
	    <li><a href="#">Link 1</a></li>
	    <li><a href="#">Link 2</a></li>
	    <li><a href="#">Link 3</a></li>
	</ul>
</p>
</div>

<?php 
if ($this->Session->check('Auth.User.id')) {
	echo ("<div class='centered' style='margin-top:30px;'><p>To edit this page, go to <code>/app/view/pages/link.ctp</code></p></div>");
} ?>