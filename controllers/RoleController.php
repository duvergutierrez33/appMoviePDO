<?php

require 'models/RoleModel.php';

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
}