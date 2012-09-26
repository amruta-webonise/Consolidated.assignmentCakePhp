<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 10:04 AM
 * To change this template use File | Settings | File Templates.
 */
class AlbumsArtist extends AppModel {
    public $name = 'AlbumsArtist';
    public $belongsTo = array(
        'Album' => array(
            'className'     => 'Album',
            'foreignKey'    => 'album_id',
            'dependent'     => true
        ),
        'Artist' => array(
            'className'     => 'Artist',
            'foreignKey'    => 'artist_id',
            'dependent'     => true
        )
    );

//    public function add($data)
//    {
//        $artists = $this->Artist->find('all');
//
//        foreach($artists as $artist)
//        {
//            foreach($data as $row)
//            {
//
//                if(($artist['name']==$row['name']) && (($row['name'])!=0))
//                {
//                    echo $artist['name'];
//
//                    $this->AlbumsArtist->save($this->request->data);
//                }
//
//            }
//        }
//    }
}
?>