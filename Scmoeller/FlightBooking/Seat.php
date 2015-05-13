<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\FlightBooking;

/**
 * Description of Seat
 *
 * @author moeller
 */
class Seat
{
    private $id;
    
    private $class;
    
    private $booked;
    
    public function __construct($id, $class, $booked)
    {
        $this->setId($id);
        
        $this->setClass($class);
        
        $this->setBooked($booked);
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function isBooked()
    {
        return $this->booked;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function setBooked($booked)
    {
        $this->booked = $booked;
    }
}
