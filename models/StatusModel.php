<?php

/**
 * Clase Modelo Roles
 */
class StatusModel
{
	private $id;
    private $name;  
	private $type_status_id;	
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
                            s.*, 
                            ts.name as typeStatusName  
                        FROM statuses s
                        INNER JOIN type_statuses ts
                        ON s.type_status_id = ts.id                        
                    ";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }

    public function newStatus($data)
    {
        try {
            $data['type_status_id'] = 1;
            $this->pdo->insert("statuses",$data);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteStatus($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'statuses';
            $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    
}