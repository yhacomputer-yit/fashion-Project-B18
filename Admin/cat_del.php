<?php

include("db.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM category WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    header("location: category_list.php") ;
}

?>
