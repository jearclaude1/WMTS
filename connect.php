<?php
//configration file 
session_start();
$db=mysqli_connect('localhost','root','','xwisdom');

// variable for trainer page
$Module_name="";
$Formative_Assessment="";
$Summative_Assessment="";
$Total_Marks="";
$decission="";
$id=0;
$update=false;

// marks_id	Module_name	Formative_Assessment	Summative_Assessment	Total_Marks
if(isset($_POST['SUBMITE'])){
    $Module_name=$_POST['Module_name'];
    $Formative_Assessment=$_POST['Formative_Assessment'];
    $Summative_Assessment=$_POST['Summative_Assessment'];
    $Total_Marks=$Formative_Assessment+$Summative_Assessment;
    if($Total_Marks>50){

        $decission='you have promotted';
    }
    else{
        
        $decission='you have to repeat';
    }
    mysqli_query($db,"INSERT INTO marks(Module_name,Formative_Assessment,Summative_Assessment,Total_Marks,decission) value('$Module_name','$Formative_Assessment','$Summative_Assessment','$Total_Marks','$decission')");
    $_SESSION['message']="sawa kbx";
    header('location:record.html');
}
?>
<?php

  // variable for trainer page
  $FirstName="";
  $LastName="";
  $Gender="";
  $id=0;
  $update=false;

if(isset($_POST['SUBMITE'])){
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Gender=$_POST['Gender'];
    mysqli_query($db,"INSERT INTO trainer(FirstName,LastName,Gender) value('$FirstName','$LastName','$Gender')");
    $_SESSION['message']="sawa kbx";
    header('location:sign in.html');
}
?>
