<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjetController
 *
 * @author jian
 */
class ProjetController extends AppController {
    public function index() {
        $project_list = $this->Projet->find('all');
        $this->set('projets', $project_list);
    }
    
    public function join(){
        if($this->request->is("post")){
            $user_id = $this->request->data['user_id'];
            $project_id = $this->request->data['request_id'];
            
        }else{
            return $this->redirect(array("action" => "index", 'controller'=>'projet'));
        }
    }
    
    public function create(){
        if ($this->request->is("post")) {
            $this->Projet->create();
            if ($this->Projet->save($this->request->data)) {
                $this->Session->setFlash(__("Your project has been saved."));
                return $this->redirect(array("action" => "index", 'controller'=>'projet'));
            }
            $this->Session->setFlash(__("Unable to add your post."));
        }
    }
    
    public function validate(){
        
        if($this->request->is("post")){
            $project_id = $this->request->data['project_id'];
            $state = $this->request->data['state'];
            
        }else{
            return $this->redirect(array("action" => "index", 'controller'=>'projet'));
        }
    }
    
    
}
