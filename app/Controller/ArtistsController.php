<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 11:14 AM
 * To change this template use File | Settings | File Templates.
 */
class ArtistsController extends AppController
{
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('artists', $this->Artist->find('all'));
    }

    public function view($id = null) {
        $this->Artist->id = $id;
        $this->set('artist', $this->Artist->read());
    }

    public function add() {
        if ($this->request->is('post'))
        {
            $this->Artist->create();
            if ($this->Artist->saveAssociated($this->request->data, array('deep' => true)))
            {
                $this->Session->setFlash(__('The artist has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The artist could not be saved. Please, try again.'));
            }
        }
    }

}
?>