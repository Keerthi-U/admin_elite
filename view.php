<?php
include_once('db.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    var_dump ($id);
    $sql="select * from scholarship_table  where id=".$id;
    $result = mysqli_query($conn, $sql);

    $cust = mysqli_fetch_array($result);
    if($cust) {
    echo ($cust);
    } else {
   
    }
     

}