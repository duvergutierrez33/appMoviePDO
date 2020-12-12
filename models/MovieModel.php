<?php

/**
 * Clase Modelo Pelicula
 */
class MovieModel
{

	private $id;
	private $name;		
    private $description;      
	private $status_id;	
    private $user_id; 
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
                            m.*, 
                            u.name as userName, 
                            s.name as statusName 
                        FROM movies m
                        INNER JOIN users u
                        ON u.id = m.user_id
                        INNER JOIN statuses s
                        ON s.id = m.status_id
                    ";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }

    public function newMovie($data)
    {
        try {                        
            $this->pdo->insert("movies",$data);
            return true;
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
       try {            
            $strSql = "SELECT * FROM movies WHERE id=:id";
            $arrayData = ['id' => $id];            
            return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editMovie($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'movies';
            $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function deleteMovie($data)
    {
        try {            
            $strWhere = 'id = '. $data['id'];
            $table = 'movies';
            $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function getLastId()
    {
        try {            
            $strSql = "SELECT MAX(id) as id FROM movies";              
            $query = $this->pdo->select($strSql);
            return $query[0]->id;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function saveCategoryMovie($arrCategories, $lastId)
    {
        try {            
            foreach ($arrCategories as $category) {
                $data = [
                    'movie_id' => $lastId,
                    'category_id' => $category['id'],                    
                ];

                $this->pdo->insert('category_movie', $data);
            }
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}