<?php

require 'models/StatusModel.php';

/**
 * Clase controlador Estados
 */
class StatusController
{
	private $statusModel;	

    public function __construct()
    {
   		$this->statusModel = new statusModel;    
    }

    public function index()
    {
    	$statuses = $this->statusModel->getAll();
    	require 'views/layout.php';
    	require 'views/statuses/list.php';    	
    }
    
    public function new()
    {        
        require 'views/layout.php';
        require 'views/statuses/new.php';    
    }
    
    public function save()
    {        
        $this->statusModel->newStatus($_POST);
        header('Location: ?controller=status');
    }

    public function delete()
    {        
        $this->statusModel->deleteStatus($_REQUEST);
        header('Location: ?controller=status');
    }

     public function edit()
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            $status = $this->statusModel->getById($id);
            $typeStatus = new TypeStatusModel;
            $typeStatuses = $typeStatus->getAll();
                        
            require 'views/layout.php';
            require 'views/statuses/edit.php';
        } else {
            echo "categoria no Existe";
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->statusModel->editTypeStatus($_POST);
            header('Location: ?controller=Status');
        } else {
            echo "Error, acción no permitida.";    
        }
    }
}