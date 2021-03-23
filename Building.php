<?php
//Project Elevator Design Application
//v.0.1 - 3/15/21
//Author: Rishi Raj (rishiraj3107@gmail.com) 

//Building class which holds the set of all elevators
//TODO: Add a batch class to handle all the reuqests from users + Configure Namespaces

class Building{
    public $total_elevator = 10; //Hardcoded for now
    public $total_floor = 100;  //Hardcoded for now
    public $elevators_array;  //Holds the details of all the elevators
    public $user_request_destination;   //Holds the single user request floor

    public function elevatorStatus(){
        foreach ($this->elevators_array as $key => $val){
            //List of availale elevators with capacity
                $available_elevators[] = [$key=>$val];
            }
        return $available_elevators;
    }

    //Function to call dispatcher
    public function getDispatcher($user_request_destination){
        $this->user_request_destination = $user_request_destination; 
    }

    // Get the user's current floor
    public function getUserFloor($current_floor=null){
        return $current_floor;
    }
}
?>