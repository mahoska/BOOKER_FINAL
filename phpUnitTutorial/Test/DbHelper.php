<?php 
class DbHelper
{
    public $pdo;
            
    public function __construct()
    {
        try{ 
        $this->pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PSW);  
        }catch(PDOException $err){}
    }
                
    public function __destruct()
    {
        $this->pdo = null;
    }

    public function executeQuery($query)
    {
        $result = $this->pdo->exec($query);
        if ($result === false)
        {
            return false;
        }
            return $result;
    }
}
