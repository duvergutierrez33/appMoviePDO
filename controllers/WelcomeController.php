<?php


/**
* Clase Controlador de Bienvenida
**/
class WelcomeController
{
    /**
     * Metodo de Inicio del controlador
     */
    public function index()
    {
        require 'views/welcome.php';
    }

    public function home()
    {
    	require 'views/layout.php';
    	require 'views/home.php';  
    }
}
