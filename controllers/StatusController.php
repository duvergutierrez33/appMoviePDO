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
}