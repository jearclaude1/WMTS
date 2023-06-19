
<?php 
//colling connection startement

include 'connect.php';

//Updating startement


// marks_id	Module_name	Formative_Assessment	Summative_Assessment	Total_Marks

$id=$_GET['updateid'];
$sql="select * from marks where marks_id=$id";
$result=mysqli_query($db,$sql);

$row=mysqli_fetch_assoc($result);
$Module_name=$row['Module_name'];
$Formative_Assessment=$row['Formative_Assessment'];
$Summative_Assessment=$row['Summative_Assessment'];

// marks_id	Module_name	Formative_Assessment	Summative_Assessment	Total_Marks

if(isset($_POST['submit'])){
    $Module_name=$_POST['Module_name'];
    $Formative_Assessment=$_POST['Formative_Assessment'];
    $Summative_Assessment=$_POST['Summative_Assessment'];
    $Total_Marks=$Formative_Assessment+$Summative_Assessment;
    if($Total_Marks>50){

        $decission='PROMOTED';
    }
    else if($Total_Marks<50){

        $decission='REPEAT';
    }
    else{
        
        $decission='SECOND SITTING';
    }

    $sql="update marks set marks_id=$id,Module_name='$Module_name', Formative_Assessment='$Formative_Assessment',Summative_Assessment='$Summative_Assessment',Total_Marks='$Total_Marks',decission='$decission' where marks_id=$id";
    $result=mysqli_query($db,$sql);
    if($result){
        echo"<script>alert('updated successfull');</script>";
        
    }
    else{
        echo"<script>alert('update was not successfull');</script>";
    }
    header('location:view.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>update</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>
<body>
<center>
<div class="ibe">    
<form method="post">

 <!-- // marks_id	Module_name	Formative_Assessment	Summative_Assessment	Total_Marks -->
   
            <label>Module_name</label><br>
            <input type="text" name="Module_name" value=<?php echo $Module_name; ?>><br><br>
            <label>Formative_Assessment</label><br>
            <input type="text" name="Formative_Assessment" value=<?php echo $Formative_Assessment; ?>><br><br>
            <label>Summative_Assessment</label><br>
            <input type="text" name="Summative_Assessment" value=<?php echo $Summative_Assessment; ?>><br><br><br><br>
            <button type="submit" name="submit">UPDATE</button>
        &nbsp;&nbsp;&nbsp;
        <a href="view.php"><button type="submit">CANCEL</a></button>
        
        </form>
</div>
</center>
</body>
</html>
