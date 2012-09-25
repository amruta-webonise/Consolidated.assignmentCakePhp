
<h1>Add Tag</h1>
<?php echo '<br/>'; ?>
<?php

echo $this->Form->create('Tag');
echo $this->Form->input('name', array('id' => 'name'));
echo $this->Form->end('Save tag');
?>