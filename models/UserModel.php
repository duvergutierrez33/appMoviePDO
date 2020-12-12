<?php

/**
 * Clase Modelo Usuario
 */
class UserModel
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
                            u.*, 
                            r.name as roleName, 
                            s.name as statusName 
                        FROM users u
                        INNER JOIN roles r
                        ON r.id = u.role_id
                        INNER JOIN statuses s
                        ON s.id = u.status_id
                    ";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }

    public function newUser($data)
    {
        try {            
            $data['status_id'] = 1;
            $data['password'] = md5($data['password']);
            $this->pdo->insert("users",$data);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
       try {            
            $strSql = "SELECT * FROM users WHERE id=:id";
            $arrayData = ['id' => $id];            
            return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editUser($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'users';
            $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function deleteUser($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'users';
            $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}