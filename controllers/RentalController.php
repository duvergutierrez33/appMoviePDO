<?php

require 'models/RentalModel.php';
require 'models/UserModel.php';
require 'models/StatusModel.php';

/**
 * Clase controlador Alquileres
 */
class RentalController
{
	private $rentalModel;	

    public function __construct()
    {
   		$this->rentalModel = new rentalModel;    
    }

    public function index()
    {
    	$rentals = $this->rentalModel->getAll();
    	require 'views/layout.php';
    	require 'views/rentals/list.php';    	
    }

    public function new()
    {
        $user = new UserModel;
        $users = $user->getAll();
        $status = new statusModel;
        $statuses = $status->getAll();
        require 'views/layout.php';
        require 'views/rentals/new.php';    
    }
    
    public function save()
    {        
        $this->rentalModel->newRental($_POST);
        header('Location: ?controller=rental');
    }

    public function delete()
    {        
        $this->rentalModel->deleteRental($_REQUEST);
        header('Location: ?controller=rental');
    }
}