<?php 

class Database{

    private $con;

public function getConnection(){

    try {
        $username="root";
        $password="";


        $this->con=null;
        $this->con = new PDO("mysql:host=localhost;port=3306;dbname=crumblesChef", $username, $password);

        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getTrace;
    }
    return $this->con;
}

}
