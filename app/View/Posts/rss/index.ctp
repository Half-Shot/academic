<?php App::import('Vendor', 'markdown/markdown-extra'); ?>
<?php
$this->set('documentData', array(
    'xmlns:dc' => 'http://purl.org/dc/elements/1.1/'));

$this->set('channelData', array(
    'title' => __("Most Recent Posts"),
    'link' => $this->Html->url('/', true),
    'description' => __("Most recent posts."),
    'language' => 'en-us'));
    
// You should import Sanitize
App::uses('Sanitize', 'Utility');

foreach ($posts as $post) {

    $postLink = array(
        'controller' => 'posts',
        'action' => 'view',
        $post['Post']['id']
    );

    echo  $this->Rss->item(array(), array(
        'title' => $post['Post']['title'],
        'link' => $postLink,
        'guid' => array('url' => $postLink, 'isPermaLink' => 'true'),
        'description' => String::truncate((strip_tags(Markdown($post['Post']['body']))), 400,array('ending' => ' (...)')),
        'pubDate' => strtotime($post['Post']['created'])
    ));
}