<?php 
//Project Elevator Design Application
//v.0.1 - 3/15/21
//Author: Rishi Raj (rishiraj3107@gmail.com) 

//Test Script to test all the functionalities. Keep updating for future changes

require './Building.php';
require './Dispatcher.php';
require './Elevator.php';
require './User.php';

$Building = new Building ;
$Elevator = new Elevator(0);
$Dispatcher = new Dispatcher;
$User = new User;
?>