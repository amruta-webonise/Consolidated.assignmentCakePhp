<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 10:14 AM
 * To change this template use File | Settings | File Templates.
 */

class AlbumsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index()
    {
        $this->set('albums', $this->Album->find('all', array('recursive' => 2)));
        $this->set('tags', $this->Album->AlbumsTag->find('all'));
    }

    public function view($id = null)
    {
        $this->Album->id = $id;
        $this->set('album', $this->Album->read());
    }

    public function add()
    {
        if ($this->request->is('post')) {

            if ($this->Album->saveAssociated($this->request->data))
            {
                $id=$this->Album->id;
                $albumArtist= array("album_id","artist_id");
                $artists = $this->request->data['Artist'];
                $index=0;
                foreach($artists as $row)
                {
                    if($row!=0)
                    {
                        $albumArtist['album_id']= $id;
                        $albumArtist['artist_id']= $row;
                        $send[$index++]= $albumArtist;
                    }
                }
                $this->Album->AlbumsArtist->saveAll($send);
                $albumTag= array("album_id","tag_id");
                $tags = $this->request->data['Tag'];
                $indexTag=0;
                foreach($tags as $tag)
                {
                    if($tag!=0)
                    {
                        $albumTag['album_id']= $id;
                        $albumTag['tag_id']= $tag;
                        $sendTag[$indexTag++]= $albumTag;
                    }
                }
                $this->Album->AlbumsTag->saveAll($sendTag);
                $this->Session->setFlash(__('The album has been saved'));
                $this->redirect(array('action' => 'index'));
            } else
            {
                $this->Session->setFlash(__('The album could not be saved. Please, try again.'));
            }
        }
        else
        {
            $this->set('artists', $this->Album->AlbumsArtist->Artist->find('all'));
            $this->set('tags', $this->Album->AlbumsTag->Tag->find('all'));
        }
    }

//    public function add()
//    {
//        if ($this->request->is('post')) {
//
//            if ($this->Album->saveAssociated($this->request->data,array('deep' => true)))
//            {
//                $this->Session->setFlash(__('The album has been saved'));
//                $this->redirect(array('action' => 'index'));
//            } else
//            {
//                $this->Session->setFlash(__('The album could not be saved. Please, try again.'));
//            }
//        }
//        else
//        {
//            $this->set('artists', $this->Album->AlbumsArtist->Artist->find('all'));
//            $this->set('tags', $this->Album->AlbumsTag->Tag->find('all'));
//        }
//    }
    public function delete($id)
    {
        if ($this->request->is('get'))
        {
            throw new MethodNotAllowedException();
        }
        if ($this->Album->delete($id))
        {
            $this->Session->setFlash('The album with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}


?>