<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

public class SRProduct{
    private $id=null;
    private $name=null;
    private $image=null;
    
    function setId($id){
        $this->$id;
    }
    function getId(){
        return $this->$id;
    }
    function setName($name){
        $this->name;
    }
    function getName(){
        return $this->$name;
    }
    function setImage($image){
        $this->$image;
    }
    function getImage(){
        return $this->$image;
    }
    
}
?>