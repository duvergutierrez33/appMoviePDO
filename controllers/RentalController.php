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

    public function edit()
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            $rental = $this->rentalModel->getById($id);
            $status = new StatusModel;
            $statuses = $status->getAll();
            $user = new UserModel;
            $users = $user->getAll();
            
            require 'views/layout.php';
            require 'views/rentals/edit.php';
        } else {
            echo "categoria no Existe";
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->rentalModel->editRental($_POST);
            header('Location: ?controller=rental');
        } else {
            echo "Error, acción no permitida.";    
        }
    }
}