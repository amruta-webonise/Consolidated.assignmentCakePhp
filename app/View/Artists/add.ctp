

<h1>Add artist</h1>
<?php echo '<br/>'; ?>
<?php
echo $this->Form->create('Artist');
echo $this->Form->input('name', array('id' => 'name'));
echo $this->Form->input('username', array('id' => 'username'));
echo $this->Form->input('description');

echo $this->Form->input('website');
echo $this->Form->input('contact_email');
echo $this->Form->input('meta_data');
echo $this->Form->input('meta_description');
echo $this->Form->input('is_featured');


echo $this->Form->end('Save Artist');
?>