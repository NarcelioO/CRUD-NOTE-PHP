<?php
namespace Core;
use PDO;

class Database{
    public $connection;

    public function __construct($config){
       
        $dsn = 'mysql:'. http_build_query($config, '', ';');
        //$dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
        //data source name
        $this->connection = new PDO($dsn, 'root', '',[
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
        
    }

    
    public function query($query, $params = []){
       
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);

        return $stmt;
    }
}



?>