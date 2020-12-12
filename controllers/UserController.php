<?php

require 'models/UserModel.php';
require 'models/RoleModel.php';

/**
 * Clase controlador Usuario
 */
class UserController
{
	private $userModel;	

    public function __construct()
    {
   		$this->userModel = new UserModel;    
    }

    public function index()
    {
    	$users = $this->userModel->getAll();
    	require 'views/layout.php';
    	require 'views/users/list.php';    	
    }

    public function new()
    {
        $role = new RoleModel;
        $roles = $role->getAll();
        require 'views/layout.php';
        require 'views/users/new.php';    
    }

    public function save()
    {        
        $this->userModel->newUser($_POST);
        header('Location: ?controller=user');
    }

    public function edit()
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            $user = $this->userModel->getById($id);
            $role = new RoleModel;
            $roles = $role->getAll();

            require 'views/layout.php';
            require 'views/users/edit.php';
        } else {
            echo "El Usuario No Existe";
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->userModel->editUser($_POST);
            header('Location: ?controller=user');
        } else {
            echo "Error, acción no permitida.";    
        }
    }

    public function delete()
    {        
        $this->userModel->deleteUser($_REQUEST);
        header('Location: ?controller=user');
    }
}