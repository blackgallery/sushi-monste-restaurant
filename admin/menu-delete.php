<?php

include "inc/connection.php";
$receive_id = $_GET['id'];
$query = "DELETE FROM menu WHERE menu_id = '{$receive_id}'";
$result = mysqli_query($connection,$query);

if($result == true){
    header("location: menu-table.php");
}else{
    echo "Can't Delete Menu.";
}

mysqli_close($connection);

?>