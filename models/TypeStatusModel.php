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
    		$strSql = " SELECT * FROM type_statuses ";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }
    
    public function getById($id)
    {
       try {            
            $strSql = "SELECT * FROM type_statuses WHERE id=:id";
            $arrayData = ['id' => $id];            
            return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editTypeStatus($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'type_statuses';
            $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}