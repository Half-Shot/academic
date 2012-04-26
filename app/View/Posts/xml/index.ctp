<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Homepage -->
    <url> 
        <loc><?php echo Router::url('/',true); ?></loc> 
        <changefreq>daily</changefreq> 
        <priority>1.0</priority> 
    </url>
    
    <!-- Post list -->     
    <?php foreach ($posts as $post):?> 
    <url> 
        <loc><?php echo Router::url(array('controller'=>'posts','action'=>'view', $post['Post']['id']), true); ?></loc> 
        <priority>0.8</priority> 
    </url> 
    <?php endforeach; ?>
</urlset> 