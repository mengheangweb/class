<?php

class People {
    public $name;
    public $age;
    public $sex;

    public function __construct(){

    }

    public function getSex() {
        return $this->sex;
    }

    public function setSex(){
        return $this->sex = true;
    }

    public function readableSex($sex) 
    {
        $result = "";
        if($sex == 1) {
            $result = "Male";
        }else if($sex == 0){
            $result = "Female";
        }else{
            $result =  "Unknown";
        }

        return strtoupper($result);
    }

}