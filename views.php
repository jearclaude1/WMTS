<?php
 //colling connection startement

include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head><title>record</title>
<link rel="stylesheet" href="views.css">

</head>
<body style="backdrop-filter: blur(5px);">

<div class="T" style=" 

    display: flex;
    justify-content: space-around;
    backdrop-filter: blur(5px);
    box-shadow: 0 0 10px rgb(232, 223, 223);
    width:100%;
    height: 100px;
  ">
     
 <div class="O" style="   margin-top:30px;">
    <label style="
    font-size: 2rem;
    color: white;
    user-select: none;
    ">World Mission</label>
 </div>

 <div class="p" style="margin-top:23px;">
    <a href="record.html"><button type="submit"  style="
    border-color:white;
    width:120px;
    height: 50px;
    border-radius:30px 30px 30px 30px;
    border-top-right-radius: 0%;
    background-image: linear-gradient(rgb(46, 77, 201),rgb(107, 41, 194));">ADD DATA </button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <a href="indexx.php"><button type="submit"  style="
    border-color:white;
    width:120px;
    height: 50px;
    border-radius:30px 30px 30px 30px;
    border-top-right-radius: 0%;
    background-image: linear-gradient(rgb(46, 77, 201),rgb(107, 41, 194));">HOME</button></a>
 </div>
</div>
<table border="1" style="width:10px; margin-left:19%; margin-top: 20px;backdrop-filter: blur(5px);box-shadow: 0 0 10px rgb(232, 223, 223);">
            <tr>			
                <th>marks_id</th>
                <th>Module_name</th>
                <th>Formative_Assessment</th>
                <th>Summative_Assessment</th>
                <th>Total_Marks</th>
                <th>decission</th>
                <th>change/remove data</th>
            </tr>

            <?php
            $sql="SELECT * FROM marks";
            $result=mysqli_query($db,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $marks_id=$row['marks_id'];
                    $Module_name=$row['Module_name'];
                    $Formative_Assessment=$row['Formative_Assessment'];
                    $Summative_Assessment=$row['Summative_Assessment'];
                    $Total_Marks=$row['Total_Marks'];
                    $decission=$row['decission'];

                    echo "
                      <tr>
                       <td>$marks_id</td>
                       <td>$Module_name</td>
                       <td>$Formative_Assessment</td>
                       <td>$Summative_Assessment</td>
                       <td>$Total_Marks</td>
                       <td>$decission</td>
                       <td><a href='delete.php?deleteid=".$marks_id."'>Delete</a>&nbsp;&nbsp;&nbsp;<a href='update.php?updateid=".$marks_id."'>update</a></td> 
                       </tr>";
                }
            }
            ?>
        </table>
    </body>
</html>
