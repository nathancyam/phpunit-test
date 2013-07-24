<?php

class TestableFunctions {
    public function sayWhat(){
        return "What!";
    }
    
    public function sayArray(){
        $array = array('brad','jeff','vinny','drew','ryan');
        return $array;
    }
    
    public function assocArray(){
        $array = array("pod"=>"cast");
        return $array;
    }
    
    public function wrongFunction() {
        $var = new UnClass;
        $var->noexist();
    }
}

class UnClass {
    public function __construct(TestableFunctions $test){
        $this->test = $test;
    }
    
    public function noexist(){
        return $this->test->sayWhat();
    }
    
}