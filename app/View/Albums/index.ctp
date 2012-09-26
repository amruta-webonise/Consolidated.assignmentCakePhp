<?php echo $this->Html->link('Add Albums', array('controller' => 'albums', 'action' => 'add')); echo '<br/>'; ?>
<?php echo '<br/>'; ?>
<?php echo $this->Html->link('Show Artists', array('controller' => 'artists', 'action' => 'index')); echo '<br/>'; ?>
<?php echo '<br/>'; ?>
<?php echo $this->Html->link('Show tags', array('controller' => 'tags', 'action' => 'index')); echo '<br/>'; ?>
<?php echo '<br/>'; ?>

<h1>Albums</h1>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>description</th>
        <th>artist</th>
        <th>Release date</th>
        <th>tags</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($albums as $album): ?>
    <tr>
        <td><?php $id= $album['Album']['id']; echo $album['Album']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($album['Album']['name'],
            array('controller' => 'albums', 'action' => 'view', $album['Album']['id'])); ?>
        </td>
        <td><?php echo $album['Album']['description']; ?></td>

        <td>
            <?php
              foreach($album['AlbumsArtist'] as $artist)
            {
                if(($album['Album']['id'])==$id)
                echo $this->Html->link($artist['Artist']['name'],array('controller'=>'artists','action'=>'view',$artist['Artist']['id']));
                echo '<br/>';
            }
            ?>
        </td>
        <td><?php echo $album['Album']['release_date']; ?></td>

        <td>
            <?php
            foreach($album['AlbumsTag'] as $tag)
            {
                if(($album['Album']['id'])==$id)
                    echo $tag['Tag']['name'];
                echo '<br/>';
            }
            ?>
            <?php unset($tag); ?>

        </td>
        <td>
            <?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $album['Album']['id']),
            array('confirm' => 'Are you sure?'));
            ?>
        </td>


    </tr>
    <?php endforeach; ?>
    <?php unset($album); ?>
</table>

