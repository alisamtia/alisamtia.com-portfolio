<?php
namespace Core;
use PDO;

class Database{

    public $connection;
    public $statement;

    public function __construct()
    {
        $config=require(base_path('config.php'));

        $database_credentials = $config['database_connection'];

        $dsn=[];
        $dsn[]=$database_credentials['host'];
        $dsn[]=$database_credentials['dbname'];

        $username = $database_credentials['username'];

        $password = $database_credentials['password'];

        $dsn="mysql:". http_build_query($database_credentials,"",";");
        $this->connection=new PDO($dsn, $username, $password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query,$params=[]){
        $this->statement=$this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function fetchAll(){
        return $this->statement->fetchAll();
    }

    public function fetch(){
        return $this->statement->fetch();
    }

    public function fetchOrFail(){
        $result = $this->fetch();

        if(!$result){
            abort();
        }

        return $result;
    }

}