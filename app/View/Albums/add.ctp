
<h1>Add Album</h1>
<?php
    echo $this->Form->create('Album');
    echo $this->Form->input('name');
    echo $this->Form->input('description');
    echo $this->Form->input('price');
    echo $this->Form->input('release_date');
    echo $this->Form->input('bit_rate');
    echo $this->Form->input('meta_data');
    echo $this->Form->input('meta_description');
    echo $this->Form->input('is_featured');

?>

<h1>ARTISTS</h1>
<?php
    foreach ($artists as $artist)
    {
        echo $this->Form->checkbox('Artist.'.$artist['Artist']['id'],array('value'=>$artist['Artist']['id']));
        echo $artist['Artist']['name'];
        echo '<br/>';echo '<br/>';
    }
?>

<h1>TAGS</h1>

<?php
    foreach ($tags as $tag)
    {
        echo $this->Form->checkbox('Tag.'.$tag['Tag']['name'],array('value'=>$tag['Tag']['id']));
        echo $tag['Tag']['name'];
        echo '<br/>';echo '<br/>';
}
?>

<?php echo $this->Form->end('save album');
