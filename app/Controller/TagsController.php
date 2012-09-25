<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 12:03 PM
 * To change this template use File | Settings | File Templates.
 */
class TagsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('tags', $this->Tag->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Tag->create();
            if ($this->Tag->saveAssociated($this->request->data, array('deep' => true))) {
                $this->Session->setFlash(__('The tag has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }
    public function edit($id = null) {
        $this->Tag->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Tag->read();
        } else {
            if ($this->Tag->save($this->request->data)) {
                $this->Session->setFlash('Your tag has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your post.');
            }
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Tag->delete($id)) {
            $this->Session->setFlash('The tag with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

}
?>