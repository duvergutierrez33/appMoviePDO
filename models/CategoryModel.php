<?php

/**
 * Clase Modelo CAtegorias
 */
class CategoryModel
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
                            c.*, 
                            s.name as statusName  
                        FROM categories c
                        INNER JOIN statuses s
                        ON c.status_id = s.id                        
                    ";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }

    public function newCategory($data)
    {
        try {
            $data['status_id'] = 1;
            $this->pdo->insert("categories",$data);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteCategory($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'categories';
            $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function getById($id)
    {
       try {            
            $strSql = "SELECT * FROM categories WHERE id=:id";
            $arrayData = ['id' => $id];            
            return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editCategory($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'categories';
            $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    
}