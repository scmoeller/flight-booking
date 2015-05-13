<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\FlightBooking;

/**
 * Description of Aircraft
 *
 * @author moeller
 */
class Aircraft
{
    private $registration;
    
    private $type;
    
    private $configuration;
    
    public function __construct($registration, $type)
    {
        $this->setRegistration($registration);
        
        $this->setType($type);
    }
    
    public function getRegistration()
    {
        return $this->registration;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getConfiguration()
    {
        return $this->configuration;
    }

    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }
}
