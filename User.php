<?php
//Project Elevator Design Application
//v.0.1 - 3/15/21
//Author: Rishi Raj (rishiraj3107@gmail.com) 

// Individual User Class to request elevators from a Building

class User extends Building{
    public $current_floor;
    
    public function callElevator($destinationFloor){
        if ($destinationFloor == $this->current_floor){
            error_log ("Same floor. Choose a different destination floor");
        }
        elseif ($destinationFloor != range(0,$this->total_floor)){
            error_log ("Invalid floor");
        }
        else{
            $this->getDispatcher($destinationFloor);
        }
    } 
}
?>