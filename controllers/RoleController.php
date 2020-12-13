<?php

require 'models/RoleModel.php';
require 'models/StatusModel.php';

/**
 * Clase controlador Alquileres
 */
class RoleController
{
	private $roleModel;	

    public function __construct()
    {
   		$this->roleModel = new roleModel;    
    }

    public function index()
    {
    	$roles = $this->roleModel->getAll();
    	require 'views/layout.php';
    	require 'views/roles/list.php';    	
    }
    
    public function new()
    {        
        require 'views/layout.php';
        require 'views/roles/new.php';    
    }
    
    public function save()
    {        
        $this->roleModel->newRole($_POST);
        header('Location: ?controller=role');
    }

    public function delete()
    {        
        $this->roleModel->deleteRole($_REQUEST);
        header('Location: ?controller=role');
    }

    public function edit()
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            $role = $this->roleModel->getById($id);
            $status = new StatusModel;
            $statuses = $status->getAll();
                        
            require 'views/layout.php';
            require 'views/roles/edit.php';
        } else {
            echo "categoria no Existe";
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->roleModel->editRole($_POST);
            header('Location: ?controller=role');
        } else {
            echo "Error, acción no permitida.";    
        }
    }
}