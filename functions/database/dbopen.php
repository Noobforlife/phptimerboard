<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function DBOpen() {
    /*
    $dbh = new \Simplon\Mysql\Mysql(
        'server',
        'username',
        'password',
        'table'
    );
     * 
     */
    
    $dbh = new \Simplon\Mysql\Mysql(
        'localhost',
        'root',
        'P@55w0rd!',
        'timerboard'
    );
    
    return $dbh;
}

