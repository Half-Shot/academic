<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Links"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Links</h1></div>

<div style="text-align: left;">

<h3>Your links</h3>

<p>
	<ul>
	    <li><a href="#">Link 1</a></li>
	    <li><a href="#">Link 2</a></li>
	    <li><a href="#">Link 3</a></li>
	</ul>
</p>
<h3>Markdown</h3>
<p>
	<ul>
		<li><a href="http://daringfireball.net/projects/markdown/basics">Basics</a></li>
		<li><a href="http://daringfireball.net/projects/markdown/syntax">Syntax</a></li>
	</ul>
</p>
<h3>About academic</h3>
<p>
	<ul>
	    <li><a href="http://academic-cms.github.com/">Official website</a></li>
	    <li><a href="http://academic-cms.github.com/documentation.html">Documentation</a></li>
	    <li><a href="https://github.com/academic-cms/academic/issues">Submit an issue</a></li>
	</ul>
</p>
</div>

<?php 
if ($this->Session->check('Auth.User.id')) {
	echo ("<div class='centered' style='margin-top:30px;'><p>To edit this page, go to <code>/app/view/pages/link.ctp</code></p></div>");
} ?>