<?php
include_once 'db.php';


class Action extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }
    public function create($table_name, $data)  
    {  
         $string = "INSERT INTO ".$table_name." (";            
         $string .= implode(",", array_keys($data)) . ') VALUES (';            
         $string .= "'" . implode("','", array_values($data)) . "')";  
         if(mysqli_query($this->connection, $string))  
         {  
              return true;  
         }  
         else  
         {  
              echo mysqli_error($this->connection);  
         }  
    }

    public function browse($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->connection, $query);           
           return mysqli_fetch_assoc($result);  
      }
   
      public function read($table_name)  
      {  
        $array = array();  
        $query = "SELECT * FROM ".$table_name."";  
        $result = mysqli_query($this->connection, $query);  
        while($row = mysqli_fetch_assoc($result))  
        {  
             $array[] = $row;  
        }  
        return $array; 
      }
    
 
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}
?>