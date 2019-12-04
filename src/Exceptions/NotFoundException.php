<?php

namespace TestMonitor\DoneDone\Exceptions;

class NotFoundException extends Exception
{
    /**
     * Create a new exception instance.
     */
    public function __construct()
    {
        parent::__construct('The resource you are looking for could not be found.');
    }
}
