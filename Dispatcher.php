<?php
//Project Elevator Design Application
//v.0.1 - 3/15/21
//Author: Rishi Raj (rishiraj3107@gmail.com) 

//Dispatcher Class to Dispatch the Elevators upon request. 
//Dispatcher class sends details to Elevator upon request from the user. 

// require './Building.php';
// require './User.php';

class Dispatcher extends Building{
    public $request_queue;  //Holds all the requests from users

    public function __construct(){
        //Constructor to instantiate the Dispatcher with the current user request
        $user = new User;
        $this->request_queue[] = $user;
    }

    //Function to handle upward direction request from user
    public function upwardRequest(){

    }

    //Function to handle downward direction request from user
    public function downwardRequest(){
        
    }
}
?>