<?php $this->layout = 'academic'; ?>

<!-- Define SEO variables. Go to /app/Config/boostrap.php to edit -->
<?php $siteName = (Configure::read('Site.name')); ?>

<?php $this->set("title_for_layout","About - $siteName"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">About</h1></div>

<h3>About this site</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt faucibus tellus nec tincidunt. Suspendisse tempus aliquet velit, ac varius sapien convallis pharetra. Ut ligula dolor, pharetra ut vestibulum sit amet, porta non est. Praesent consequat consectetur lacinia. In sed aliquam elit. Praesent consequat, risus in gravida iaculis, tortor erat dapibus diam, cursus imperdiet tellus neque ut ante.</p>

<h3>Technology</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt faucibus tellus nec tincidunt. Suspendisse tempus aliquet velit, ac varius sapien convallis pharetra. Ut ligula dolor, pharetra ut vestibulum sit amet, porta non est. Praesent consequat consectetur lacinia. In sed aliquam elit. Praesent consequat, risus in gravida iaculis, tortor erat dapibus diam, cursus imperdiet tellus neque ut ante.</p>

<?php 
if ($this->Session->read('Auth.User.role') == 'admin') {
	echo ("<div class='centered' style='margin-top:30px;'><p><i class='icon-info-sign'></i> To edit this page, go to <code>/app/View/Pages/about.ctp</code></p></div>");
} ?>

</div>