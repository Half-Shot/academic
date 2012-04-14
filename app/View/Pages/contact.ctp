<?php $this->layout = 'academic'; ?>

<!-- Define SEO variables. Go to /app/Config/boostrap.php to edit -->
<?php 
 $siteName = (Configure::read('Site.name'));
 $siteEmail = (Configure::read('Site.email'));
 ?>

<?php $this->set("title_for_layout","Contact - $siteName"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Contact</h1></div>

<address>
    <strong>Twitter, Inc.</strong><br>
    795 Folsom Ave, Suite 600<br>
    San Francisco, CA 94107<br>
    <abbr title="Phone">P:</abbr> (123) 456-7890<br>
    <a href="mailto:#"><?php echo $siteEmail ?></a>
</address>

<?php 
if ($this->Session->check('Auth.User.id')) {
	echo ("<div class='centered' style='margin-top:30px;'><p>To edit this page, go to <code>/app/View/Pages/contact.ctp</code></p></div>");
} ?>
