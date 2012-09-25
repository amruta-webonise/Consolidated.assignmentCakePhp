<?php echo $this->Html->link('Add Tag', array('controller' => 'tags', 'action' => 'add')); echo '<br/>'; ?>
<?php echo '<br/>'; ?>
<?php echo $this->Html->link('show albums', array('controller' => 'albums', 'action' => 'index')); echo '<br/>'; ?>
<?php echo '<br/>'; ?>
<h1>Tags</h1>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>


    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($tags as $tag): ?>
    <tr>
        <td><?php echo $tag['Tag']['id']; ?></td>

        <td><?php echo $tag['Tag']['name']; ?></td>

        <td>
            <?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $tag['Tag']['id']),
            array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $tag['Tag']['id'])); ?>
        </td>



    </tr>
    <?php endforeach; ?>
    <?php unset($tag); ?>
</table>