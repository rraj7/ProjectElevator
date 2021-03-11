<?php
class Elevator{
    public $elevator_id;
    public $current_state;
    public $max_capacity = 10;
    public $current_capacity;

    public function __construct($elevator_id,$current_state=0,$current_capacity=null){
        $elevator_id = $this->elevator_id;
        $current_state = $this->current_state;
        $current_capacity = $this->current_capacity;
    }
    
    public function getElevatorStatus(){
        $status[] = [$this->elevator_id=>$this->current_floor];
        return $status;
    }

    public function elevatorMovement(){
        
    }
}
?>