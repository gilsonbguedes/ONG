<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sample
 *
 * @author gilson
 */
class Sample {
   private $id =1;
   function __construct() {
       
   }
   public function getId() {
       return $this->id;
   }

   public function setId($id) {
       $this->id = $id;
   }


   

}

$sample = new Sample();
echo $sample->getId();
