<?php $this->layout = 'academic'; ?>

<!-- Define SEO variables. Go to /app/Config/boostrap.php to edit -->
<?php $siteName = (Configure::read('site.name')); ?>

<?php $this->set("title_for_layout","About - $siteName"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">About</h1></div>

<div style="text-align: justify;">

<ul class="thumbnails">
  <li>
    <div class="thumbnail">
      <img src="http://placehold.it/500x110" alt="">
    </div>
  </li>
</ul>

<h3>About me</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis bibendum lorem vitae aliquam. Quisque convallis libero non arcu fermentum egestas. Sed aliquam arcu sed velit ultrices tempor. Aliquam ac condimentum lectus. Quisque venenatis molestie ullamcorper.</p>

<h3>About this site</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis bibendum lorem vitae aliquam. Quisque convallis libero non arcu fermentum egestas. Sed aliquam arcu sed velit ultrices tempor. Aliquam ac condimentum lectus. Quisque venenatis molestie ullamcorper.</p>

<h3>Technology</h3>
<p>This site is powered by <a href="http://academic-cms.github.com/">academic</a>. Its code is based on <a href="http://cakephp.org/">CakePHP</a> 2.1.0 and <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> 2.0.2. It respects HTML5 and CSS3 standards.</p>
</div>

<?php 
if ($this->Session->check('Auth.User.id')) {
	echo ("<div class='centered' style='margin-top:30px;'><p>To edit this page, go to <code>/app/view/pages/about.ctp</code></p></div>");
} ?>

