<?php

require 'models/CategoryModel.php';

/**
 * Clase controlador Categorias
 */
class CategoryController
{
	private $categoryModel;	

    public function __construct()
    {
   		$this->categoryModel = new categoryModel;    
    }

    public function index()
    {
    	$categories = $this->categoryModel->getAll();
    	require 'views/layout.php';
    	require 'views/categories/list.php';    	
    }
    
    public function new()
    {        
        require 'views/layout.php';
        require 'views/categories/new.php';    
    }
    
    public function save()
    {        
        $this->categoryModel->newCategory($_POST);
        header('Location: ?controller=category');
    }

    public function delete()
    {        
        $this->categoryModel->deleteCategory($_REQUEST);
        header('Location: ?controller=category');
    }
}