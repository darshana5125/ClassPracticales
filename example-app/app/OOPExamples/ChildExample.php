<?php

namespace App\OOPExamples;
use App\OOPExamples\exampleInterface;



class ChildExample extends InheritantExample implements exampleInterface {

    public function accessParent(){
       return $this->variable1;

    }

    public function main(){
        return $this->variable3;

    }

    public function main1($data1,$data2){
        return $data1;

    }

  
    
}