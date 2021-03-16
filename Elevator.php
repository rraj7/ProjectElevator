<?php
//Project Elevator Design Application
//v.0.1 - 3/15/21
//Author: Rishi Raj (rishiraj3107@gmail.com) 

//Elevator Class for an individual elevator
//require './Building.php';

class Elevator extends Building{
    public $elevator_id;
    public $current_state; //0 - Available 1- Going up 2- Going down [May change]
    public $max_capacity = 10;
    public $current_capacity;

    public function __construct($elevator_id,$current_state=0,$current_capacity=null){
        $elevator_id = $this->elevator_id;
        $current_state = $this->current_state;
        $current_capacity = $this->current_capacity;
    }
    
    //Getter function 
    public function getElevatorStatus(){
        $status[] = ["Capacity"=>$this->current_capacity,"Current_Floor"=>$this->current_floor];
        return $status;
    }
}   
?>