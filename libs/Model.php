<?php

include 'includes/Dsn.php';

class Model {

    
    
    public function __construct(){
        $this->connect_db();
    }
    
    public function connect_db(){
        $con = mysql_connect(Dsn::HOSTNAME, Dsn::USERNAME, Dsn::PASSWORD) or die('could not connect to server');
        
        mysql_select_db(Dsn::DBNAME, $con) or die('could not connect to db');
        
        return $con;
    }
    
    
    
    
    

}