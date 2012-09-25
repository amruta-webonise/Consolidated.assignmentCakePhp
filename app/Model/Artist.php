<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 10:04 AM
 * To change this template use File | Settings | File Templates.
 */
class Artist extends AppModel {
    public $name = 'Artist';
        public $hasMany = array(
            'AlbumsArtist' => array(
                'className'     => 'AlbumsArtist',
                'foreignKey'    => 'artist_id',
                'dependent'     => true
            )
            );

}
?>