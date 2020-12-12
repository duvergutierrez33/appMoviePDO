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
}