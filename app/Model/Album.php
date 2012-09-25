<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 10:04 AM
 * To change this template use File | Settings | File Templates.
 */
class Album extends AppModel {
    public $name = 'Album';
    public $hasMany = array(
        'AlbumsArtist' => array(
            'className'     => 'AlbumsArtist',
            'foreignKey'    => 'album_id',
            'dependent'     => true
        ),
        'AlbumsTag' => array(
            'className'     => 'AlbumsTag',
            'foreignKey'    => 'album_id',
            'dependent'     => true
        )
    );
}
?>