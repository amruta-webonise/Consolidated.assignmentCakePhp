<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 10:04 AM
 * To change this template use File | Settings | File Templates.
 */
class Tag extends AppModel {
    public $name = 'Tag';
    public $hasMany = array(
        'AlbumsTag' => array(
            'className'     => 'AlbumsTag',
            'foreignKey'    => 'tag_id',
            'dependent'     => true
        )
    );


}
?>