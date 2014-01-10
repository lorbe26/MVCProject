<?php
require_once ('includes/Dsn.php');

class user_model extends Model{
    
    public function __contruct() {
         parent::__contruct();
    }

   
     public function getList(){ 
        $sql = ("SELECT * FROM user");
        $res = mysql_query($sql);
        return $res;
        
        /*$result = array();
        if ($res){
            while($row = mysql_fetch_array($res)){
                $result[] = $row;
            }
        }
        exit;
        return $result;*/
    }
    
    
    
    
}//end class



?>
