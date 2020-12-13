<?php

/**
 * Clase Modelo Roles
 */
class RoleModel
{
	private $id;
    private $name;  
	private $status_id;	
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
                            s.name as statusName 
                        FROM roles r
                        INNER JOIN statuses s
                        ON r.status_id = s.id                        
                    ";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }

    public function newRole($data)
    {
        try {
            $data['status_id'] = 1;
            $this->pdo->insert("roles",$data);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteRole($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'roles';
            $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function getById($id)
    {
       try {            
            $strSql = "SELECT * FROM roles WHERE id=:id";
            $arrayData = ['id' => $id];            
            return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editRole($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'roles';
            $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    
}