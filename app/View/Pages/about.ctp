<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","About"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">About</h1></div>

<div style="text-align: justify;">
<h3>About me</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis bibendum lorem vitae aliquam. Quisque convallis libero non arcu fermentum egestas. Sed aliquam arcu sed velit ultrices tempor. Aliquam ac condimentum lectus. Quisque venenatis molestie ullamcorper.</p>

<h3>About this site</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis bibendum lorem vitae aliquam. Quisque convallis libero non arcu fermentum egestas. Sed aliquam arcu sed velit ultrices tempor. Aliquam ac condimentum lectus. Quisque venenatis molestie ullamcorper.</p>

<h3>Technology</h3>
<p>This site is powered by <a href="https://github.com/academic-cms/academic">academic</a>. Its code is based on <a href="http://cakephp.org/">CakePHP</a> 2.1.0 and <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> 2.0.2. It respects HTML5 and CSS3 standards.</p>
</div>

<?php 
if ($this->Session->check('Auth.User.id')) {
	echo ("<div class='centered' style='margin-top:30px;'><p>To edit this page, go to <code>/app/view/pages/about.ctp</code></p></div>");
} ?>

