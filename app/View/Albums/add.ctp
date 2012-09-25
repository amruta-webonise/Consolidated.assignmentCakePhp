<?php
//echo $this->Html->script(array('jquery.tokeninput'),false);
//echo $this->Form->
//?>
<!--<script type="text/javascript">-->
<!--    $(function(){-->
<!--        $('#AlbumArtist').tokenInput();-->
<!--    });-->
<!--</script>-->


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
echo $this->Form->input('artist',array('type'=>'text'));
//echo $this->Form->checkbox($artist['id'],$artist['name'])

?>

<h1>ARTISTS</h1>

<?php foreach ($artists as $artist):?>
<input type="checkbox" value="AlbumsArtist.artist_id">
<?php echo $artist.'<br/>'; ?>
<?php endforeach; ?>

<?php unset($artist); ?>
<?php echo '<br/>';?>
<h1>TAGS</h1>

<?php foreach ($tags as $tag):?>
<input type="checkbox" value="AlbumsTag.tag_id">
 <?php echo $tag.'<br/>'; ?>
<?php endforeach; ?>

<?php unset($tag); ?>

<?php
echo $this->Form->end('Save album');
?>