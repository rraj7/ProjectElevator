# Elevator System Design 

### Requirement Analysis for Elevator Control System:
    * Passengers
    * Elevators
    * Floor
    * Doors
    * Button Panel
    * Dispatch Position
    * Emergency System
    * Zone

### Use Cases:
    * Calling Elevator
    * Moving/Stopping Elevator
    * Doors Open/Close
    * Direction 
    * Floor
    * Emergency Brakes 
    * Emergency Calls

    **Elevator/Passanger Use Cases: 
        * Elevator Idle 
        * Elevator and Passengers moving in same direction 
        * Elevator and Passengers moving in different direction 
        

### Class and Interface: 
    * Button Interface => Press Up/Down ()
        * Elevator Button Class 
        * Hall Button Class

    * Door Class 
        * Open
        * Close

    * Elevator Motion 
        * Move() 
        * Stop()
    
    * Dispatcher Interface

    * Monitoring Interface


### Algorithms 
    * First Come First Serve (FCFS)
        - Dispatcher stores requests in a Queue
        - Scheduler Sends the Elevator to motion 

### Flow 
    * User -> Building -> Dispatcher -> Elevator