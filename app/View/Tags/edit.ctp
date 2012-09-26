
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#name").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter tag name"
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