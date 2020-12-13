<?php

require 'models/TypeStatusModel.php';

/**
 * Clase controlador Alquileres
 */
class TypeStatusController
{
	private $typeStatusModel;	

    public function __construct()
    {
   		$this->typeStatusModel = new typeStatusModel;    
    }

    public function index()
    {
    	$typeStatuses = $this->typeStatusModel->getAll();
    	require 'views/layout.php';
    	require 'views/typeStatuses/list.php';    	
    }  
    
     public function edit()
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            $typeStatus = $this->typeStatusModel->getById($id);
                                    
            require 'views/layout.php';
            require 'views/typeStatuses/edit.php';
        } else {
            echo "categoria no Existe";
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->typeStatusModel->editTypeStatus($_POST);
            header('Location: ?controller=typeStatus');
        } else {
            echo "Error, acción no permitida.";    
        }
    }
}