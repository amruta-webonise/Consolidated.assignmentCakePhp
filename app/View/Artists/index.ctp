<?php echo $this->Html->link('Add Artist', array('controller' => 'artists', 'action' => 'add')); echo '<br/>'; ?>
<?php echo '<br/>'; ?>
<?php echo $this->Html->link('show albums', array('controller' => 'albums', 'action' => 'index')); echo '<br/>'; ?>
<?php echo '<br/>'; ?>
<h1>Artists</h1>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>description</th>
        <th>price</th>
        <th>Release date</th>
        <th>bitrate</th>


    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($artists as $artist): ?>
    <tr>
        <td><?php echo $artist['Artist']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($artist['Artist']['name'],
            array('controller' => 'artists', 'action' => 'view', $artist['Artist']['id'])); ?>
        </td>
        <td><?php echo $artist['Artist']['description']; ?></td>
        <td><?php echo $artist['Artist']['website']; ?></td>
        <td><?php echo $artist['Artist']['contact_email']; ?></td>
        <td><?php echo $artist['Artist']['meta_data']; ?></td>
        <td>
            <?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $artist['Artist']['id']),
            array('confirm' => 'Are you sure?'));
            ?>
        </td>


    </tr>
    <?php endforeach; ?>
    <?php unset($artist); ?>
</table>