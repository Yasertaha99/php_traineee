<?php

namespace App\Oop;
    
class Test2
{
    private string $name;
    private int  $age;
    private string $adress;
    /**
     * Test2 construct 
     * @param string  $name 
     * @param int $age 
     * @param string  $address 
     */

    public function __construct($name,  $age,  $adress){
        // throw new \Exception('Not implemented');
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
        // $this->printInfo();
    }
    public function printInfo(){
        return "My Name is {$this->name} , 
                I have {$this->age} Years Old, 
                live in {$this->adress}";
    }
}
