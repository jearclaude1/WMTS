<?php

 //delete Connection startement
 
 include 'connect.php';
 /*Deleting startement*/

 if(isset($_GET['deleteid'])){
    $marks_id=$_GET['deleteid'];
    $sql="delete from marks where marks_id=$marks_id";
    $result=mysqli_query($db,$sql);
    if($result){
        header('location:view.php');
    }
    else{
        
        die(mysqli_error($db));
    }
 }
?>