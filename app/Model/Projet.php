<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Projet
 *
 * @author jian
 */
class Projet extends AppModel{
    public $hasMany = array(
        'Projet participants'=>array(
            'className'=>'Participant'
        )
    );
}
