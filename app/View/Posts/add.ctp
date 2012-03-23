<h2>Publish a post</h2>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '15'));
echo $this->Form->input('format', array(
    'options' => array('standard' => 'Standard', 'link' => 'Link')
));

echo $this->Form->end('Publish');
?>