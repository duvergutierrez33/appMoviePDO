<?php

/**
 * Clase Modelo Usuario
 */

class RentalModel
{
	private $id;
	private $name;
	private $email;
	private $password;
	private $status_id;
	private $role_id;
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
            $strSql = " SELECT 
                            r.*, 
                            u.name as userName, 
                            s.name as statusName 
                        FROM rentals r
                        INNER JOIN statuses s
                        ON r.status_id = s.id
                        INNER JOIN users u
                        ON r.user_id = u.id
                    ";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }

    public function newRental($data)
    {
        try {            
            $this->pdo->insert("rentals",$data);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteRental($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'rentals';
            $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function getById($id)
    {
       try {            
            $strSql = "SELECT * FROM rentals WHERE id=:id";
            $arrayData = ['id' => $id];            
            return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editRental($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'rentals';
            $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    
}