<?php


if (isset($_POST['submit'])) {
    
    
    $category=$_POST['category'];
    
        if ( $category ) {
          include_once "config.php";   
        }
        
    $select_query="INSERT INTO acc_cat (category) VALUES('$category')";
    $result=mysqli_query($connection,$select_query);
    
    if ($result){
         $sucess = "Succefully Registered";
    }
    else{
       echo "failed";
    }
}



?><!doctype html>
<html>
<head>
<style>

body.groove {border-style: groove;
           width:400px;
           height:300px;
           position:absolute;
           left:400px;
           top: 50px;
           }
.boy {border-style: groove;
           width:30px;
           height:20px;
           position:absolute;
           left:10px;}
.boyc {border-style: groove;
           width:300px;
           height:200px;
           position:absolute;
           left:370px;}
           
           td{width:500px;
 background-color: pink;}
</style>
</head>
<body class="groove" >
<p style="color: ;">Crete New Account Category</p>
<center>
<form method="POST">
<label style="color: ;">Category Name </label><input type="text" style="margin: 10px;length:50px;"name="category" value=""><br />

<input style="color: white;background-color: red;" type="submit" value="SAVE" name="submit">
</div>

</center>


</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superstore";

  include_once "config.php";

$sql = "SELECT id,category FROM acc_cat";
$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
    echo("<center>");
    echo "<table style=border-style:solid;  border='1'> ";
    echo"<tr>";
    echo"<th>s/n</th>";
      echo"<th> Account Category</th>";
       
           echo"</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo"<td>" .$row['id']."</td>";
        
          echo"<td>" .$row['category']."</td>";
           
            echo"<tr>";
        
    }
    echo"</table>";
} else {
    echo "0 results";
}
mysqli_close($connection);
?>















</html>