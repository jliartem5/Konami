<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author jian
 */
class UserController extends AppController {

    var $uses = array('Participant', 'Association');

    public function index() {
        
    }

    public function _login($user) {
        $this->Session->write("user", $user);
        return $this->redirect(array(
                    'action' => 'index'
        ));
    }

    public function regist() {
        if ($this->request->is('post')) {
            if ($this->request->data['user_type'] == 'association') {
                $this->Association->create();
                if ($this->Association->save($this->request->data)) {
                    $this->Session->setFlash(__("Your account has been saved."));
                    return $this->_login($this->Association->getInsertID());
                }
            } else {
                $this->Participant->create();
                if ($this->Participant->save($this->request->data)) {
                    $this->Session->setFlash(__("Your account has been saved."));
                    return $this->_login($this->Participant->getInsertID());
                }
            }
        }
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Participant->findByLogin($this->request->data['login']);
            if ($user != null) {
                if ($user->password = $this->request->data['password']) {
                    return $this->_login($user);
                }
            }
        }
        $this->Session->setFlash(__("Unable to connect."));
    }

    public function logout() {
        if ($this->Session->check('user')) {
            $this->Session->delete('user');
        }
    }

}
