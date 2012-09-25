<script src="/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#name").validate({
            expression: "if (name='') return true; else return false;",
            message: "tag name needed to add to database"
        });
    });
</script>

<h1>Edit Post</h1>
    <?php
echo $this->Form->create('Tag', array('action' => 'edit'));
echo $this->Form->input('name', array('id' => 'name'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save tag');
?>