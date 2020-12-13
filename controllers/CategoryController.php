<?php

require 'models/CategoryModel.php';
require 'models/StatusModel.php';

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

    public function edit()
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            $category = $this->categoryModel->getById($id);
            $status = new StatusModel;
            $statuses = $status->getAll();
            
            require 'views/layout.php';
            require 'views/categories/edit.php';
        } else {
            echo "categoria no Existe";
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->categoryModel->editCategory($_POST);
            header('Location: ?controller=category');
        } else {
            echo "Error, acción no permitida.";    
        }
    }
}