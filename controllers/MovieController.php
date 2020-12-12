<?php

require 'models/MovieModel.php';
require 'models/UserModel.php';
require 'models/CategoryModel.php';

/**
 * Clase controlador Usuario
 */
class MovieController
{
	private $movieModel;	

    public function __construct()
    {
   		$this->movieModel = new movieModel;    
    }

    public function index()
    {
    	$movies = $this->movieModel->getAll();
    	require 'views/layout.php';
    	require 'views/movies/list.php';    	
    }

    public function new()
    {        
        $user = new UserModel;
        $users = $user->getAll();
        $category = new CategoryModel;
        $categories = $category->getAll();
        require 'views/layout.php';
        require 'views/movies/new.php';    
    }

    public function save()
    {   
        //organizar array para la tabla de movies
        $arrMovie = [
            'name'          => $_POST['name'],
            'description'   => $_POST['description'],
            'user_id'       => $_POST['user_id'],
            'status_id'     => 1,
        ];

        // array de las categorias
        $arrCategories = $_POST['categories'];

        //inserción Pelicula       
        $respMovie = $this->movieModel->newMovie($arrMovie);


        //Obtener ultimo id registrado de la Pelicula
        $lastId = $this->movieModel->getLastId();

        //insercion detalle category_movie
        $respCategoryMovie = $this->movieModel->saveCategoryMovie($arrCategories, $lastId);

        //validar si las inmserciones fueron correctas
        $arrResp = [];

        if($respMovie == true && $respCategoryMovie == true) {
            $arrResp = [
                'success' => true,
                'message' => 'Pelicula Creada'
            ];
        } else {
            $arrResp = [
                'error' => true,
                'message' => 'Error Creando la Pelicula'
            ];
        }

        echo json_encode($arrResp);
        return;
        
    }

    public function edit()
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            $movie = $this->movieModel->getById($id);

            $user = new UserModel;
            $users = $user->getAll();           

            require 'views/layout.php';
            require 'views/movies/edit.php';
        } else {
            echo "La pelicula No Existe";
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->movieModel->editMovie($_POST);
            header('Location: ?controller=movie');
        } else {
            echo "Error, acción no permitida.";    
        }
    }

    public function delete()
    {        
        $this->movieModel->deleteMovie($_REQUEST);
        header('Location: ?controller=movie');
    }
}