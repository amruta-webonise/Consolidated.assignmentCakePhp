<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 10:05 AM
 * To change this template use File | Settings | File Templates.
 */
class AlbumsTag extends AppModel {
    public $name = 'AlbumsTag';
    public $belongsTo = array(
        'Album' => array(
            'className'     => 'Album',
            'foreignKey'    => 'album_id',
            'dependent'     => true
        ),
        'Tag' => array(
            'className'     => 'Tag',
            'foreignKey'    => 'tag_id',
            'dependent'     => true
        )
    );
}
?>