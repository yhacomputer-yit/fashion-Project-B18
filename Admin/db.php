<?php

$conn = mysqli_connect("localhost","root","admin123" ,"fashion2");
if($conn){
    echo "Connect Success";
}else{
    echo "Fail";
}

?>