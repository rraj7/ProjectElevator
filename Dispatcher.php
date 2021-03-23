<?php
//Project Elevator Design Application
//v.0.1 - 3/15/21
//Author: Rishi Raj (rishiraj3107@gmail.com) 

//Dispatcher Class to Dispatch the Elevators upon request. 
//Dispatcher class sends details to Elevator upon request from the user. 

// require './Building.php';
// require './User.php';

class Dispatcher extends Building{
    public $user_destination_queue;  //Holds all the requests from users
    public $user_current_floor;

    public function __construct(){
        //Constructor to instantiate the Dispatcher with the current user destination floor
        $this->user_destination_queue[] = $this->user_destination_queue;
        var_dump($this->user_destination_queue);    
    }

    //Sets the destination floor from user class
    public function setDestination(){
        $this->user_request_destination = $this->user_destination_queue;
    }

    public function determineDestinationDirection($user_destination_queue){
        if ($user_destination_queue> $this->user_current_floor){
            $this->upwardRequest();
        }
        else {
            $this->downwardRequest();
        }
    }
    //Function to handle upward direction request from user
    public function upwardRequest(){

    }

    //Function to handle downward direction request from user
    public function downwardRequest(){
        
    }
}
?>