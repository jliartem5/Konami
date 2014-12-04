<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Participant
 *
 * @author jian
 */
class Participant extends AppModel{
    public $hasAndBelongsToMany  = array(
        'Projets'=>array(
            'className'=>'Projet',
            'joinTable'=>'projet_participant',
            'foreignKey'=>'participant_id',
            'associationForeignKey'=>'projet_id',
            'unique'=>false
        )
    );
}
