<?php

/**
 * Clase Modelo CAtegorias
 */
class TypeStatusModel
{

	private $id;
    private $name;  
	private $pdo;

    public function __construct()
    {
    	try {
    		$this->pdo = new Database;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    }    
    }

    public function getAll()
    {
    	try {    		
    		$strSql = "SELECT * FROM type_statuses";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }    
}