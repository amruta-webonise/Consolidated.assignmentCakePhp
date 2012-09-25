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

    public function index() {
        $this->set('albums', $this->Album->find('all', array(
            'recursive' => 2)));
        $this->set('tags', $this->Album->AlbumsTag->find('all'));
    }

    public function view($id = null) {
        $this->Album->id = $id;
        $this->set('album', $this->Album->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Album->create();
            if ($this->Album->save($this->request->data)) {

                $this->Session->setFlash(__('The album has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The album could not be saved. Please, try again.'));
            }
        }
        else
        {
            $this->set('artists', $this->Album->AlbumsArtist->Artist->find('list'));
            $this->set('tags', $this->Album->AlbumsTag->Tag->find('list'));
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Album->delete($id)) {
            $this->Session->setFlash('The album with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}


?>