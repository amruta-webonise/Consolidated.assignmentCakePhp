<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#name").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter artist name"
        });
        jQuery("#username").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter artist username"
        });
        jQuery("#desc").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter artist description"
        });
        jQuery("#web").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter website"
        });
        jQuery("#email").validate({
            expression: "if (VAL) return true; else return false;",
            message: "enter artist contact email"
        });
        jQuery("#email").validate({
            expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
            message: "enter valid artist contact email"
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

<h1>Add artist</h1>
<?php echo '<br/>'; ?>
<?php
echo $this->Form->create('Artist');
echo $this->Form->input('name', array('id' => 'name'));
echo $this->Form->input('username', array('id' => 'username'));
echo $this->Form->input('description', array('id' => 'desc'));

echo $this->Form->input('website', array('id' => 'web'));
echo $this->Form->input('contact_email', array('id' => 'email'));
echo $this->Form->input('meta_data', array('id' => 'meta_data'));
echo $this->Form->input('meta_description', array('id' => 'meta_description'));
echo $this->Form->input('is_featured');


echo $this->Form->end('Save Artist');
?>