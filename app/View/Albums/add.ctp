<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#name").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter album name"
        });
        jQuery("#desc").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter album description"
        });
        jQuery("#price").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter album price"
        });

        jQuery("#price").validate({
            expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
            message: "enter valid album price(integer)"
        });

        jQuery("#bit_rate").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter bit_rate"
        });
        jQuery("#bit_rate").validate({
            expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
            message: "enter valid bit_rate(integer)"
        });
        jQuery("#meta_data").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter meta_data"
        });
        jQuery("#meta_description").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter meta description"
        });

    });
</script>



<h1>Add Album</h1>
<?php
    echo $this->Form->create('Album');
    echo $this->Form->input('name', array('id' => 'name'));
    echo $this->Form->input('description', array('id' => 'desc'));
    echo $this->Form->input('price', array('id' => 'price'));
    echo $this->Form->input('release_date');
    echo $this->Form->input('bit_rate', array('id' => 'bit_rate'));
    echo $this->Form->input('meta_data', array('id' => 'meta_data'));
    echo $this->Form->input('meta_description', array('id' => 'meta_description'));
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
