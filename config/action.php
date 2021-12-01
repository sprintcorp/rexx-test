<?php
include_once 'db.php';


class Action extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }
    public function create($data)
    {
        $query = 'INSERT INTO sales (customer_name, customer_mail, product_id, product_name, product_price, sale_date)
VALUES (?, ?, ?, ?, ?, ?)';
        $insert_data = mysqli_prepare($this->connection, $query);

        mysqli_stmt_bind_param($insert_data, 'ssisds', $customer_name,$customer_mail, $product_id, $product_name, $product_price, $sale_date);
        foreach ($data as $row) {
            $customer_name = $row["customer_name"];
            $customer_mail = $row["customer_mail"];
            $product_id = $row["product_id"];
            $product_name = $row["product_name"];
            $product_price = $row["product_price"];
            $sale_date = $row["sale_date"];
            mysqli_stmt_execute($insert_data);
        }
        if($insert_data){
            return true;
        }else {
            echo mysqli_error($this->connection);
        }

    }

//    public function browse($table_name, $where_condition)
//      {
//           $condition = '';
//           $array = array();
//           foreach($where_condition as $key => $value)
//           {
//                $condition .= $key . " = '".$value."' AND ";
//           }
//           $condition = substr($condition, 0, -5);
//           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;
//           $result = mysqli_query($this->connection, $query);
//           return mysqli_fetch_assoc($result);
//      }
   
      public function read($filter,$price,$product,$customer)
      {  
        $array = array();
        if($filter == 'false') {
            $query = "SELECT * FROM sales";
        }else{

            $query = "SELECT * FROM sales WHERE customer_name = '{$customer}' AND product_name='{$product}' AND product_price='{$price}'";
        }
        $result = mysqli_query($this->connection, $query);
        if($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
        }else{
            $array = [];
        }
        $arrSum = array_sum(array_column($array, 'product_price'));
        return ['data'=>$array,'total'=>$arrSum];

      }

      public function fetch_column($column)
      {
          $array = array();
              $query = "SELECT ".$column." FROM sales";
          $result = mysqli_query($this->connection, $query);
          while($row = mysqli_fetch_assoc($result))
          {
              $array[] = $row;
          }
          $val = array_unique(array_column($array, $column));
          return $val;
      }
    
 
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}
?>