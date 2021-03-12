<?php
//Building class which holds the set of all elevators
class Building{
    public $total_elevator = 10;
    public $total_floor = 100;
    public $elevators_array = ["1"=>"0","2"=>"1","3"=>"2","4"=>"0"];    
    //Holds the details of all the elevators

    public function elevatorStatus(){
        foreach ($this->elevators_array as $key => $val){
            if ($val ==0){
                $available_elevators[] = $key;
            }
        }
        return $available_elevators;
    }     

    
}

$Building = new Building;
var_dump($Building->elevatorStatus());
?>