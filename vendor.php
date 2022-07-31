


<?php


if (isset($_POST['submit'])) {
    
    $companyname =$_POST['companyname'];
    $Adress1=$_POST['Adress1'];
      $Adress2=$_POST['Adress2'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $vendorb=$_POST['vendorb'];
       
        if ( $companyname || $adress1 || $adress2 || $number || $email || $vendorb) {
          include_once "config.php";   
        }
        
    $select_query="INSERT INTO vendor (companyname ,Adress1,Adress2,number,email,vendorb) VALUES('$companyname','$Adress1','$Adress2','$number','$email','$vendorb')";
    $result=mysqli_query($connection,$select_query);
    
    if ($result= true){
         $sucess = "Succefully Registered";
    }
    else{
       echo "failed";
    }
}



?>
<h3>create New Vendor</h3>
<!doctype html>
<html>
<head>
<style>

body.groove {border-style: groove;
           width:700px;
           height:500px;
           position:absolute;
           left:300px;
           padding:0px;
           }
.boy {border-style: groove;
           width:300px;
           height:200px;
           position:absolute;
           left:10px;}
.boyc {border-style: groove;
           width:300px;
           height:200px;
           position:absolute;
           left:370px;}
              th{width:1000px;
 background-color: pink;}
 td{
    width: 500px;
    background-color:gray;
 }
</style>
</head>
<body class="groove" >
<center>
<form method="POST">
<label style="color: ;">Vendor id   </label><input type="text" name="" value="AUTO" disabled="Auto"><br />
<label style="color: ;">Company name</label><input type="text" style="margin: 10px;length:50px;"name="companyname" value=""><br />
<label style="color: ;">Adress1 </label><input type="text" style="margin: 10px;length:50px;"name="Adress1" value=""><br />
<label style="color: ;">Adress2 </label><input type="text" style="margin: 10px;length:50px;"name="Adress2" value="">
<label>Phone number </label><input style="margin: 10px;" type="text" name="number"><br />
<label>email    </label><input style="margin: 10px;" type="email" name="email"><br />
<label>Vendor balance    </label><input style="margin: 10px;" type="text" name="vendorb" value=""><br /> 


<input style="color:white;background-color: red;"type="submit" value="POST" name="submit">

</form>
</center>

</body>

</html>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "superstore";

  include_once "config.php";

$sql = "SELECT id,companyname ,Adress1,Adress2,number,email,vendorb FROM vendor";
$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
    echo("<center>");
    echo "<table style=border-style:solid;  border='1'> ";
    echo"<tr>";
    echo"<th>s/n</th>";
     echo"<th>Companyname</th>";
      echo"<th>Adress1</th>";
       echo"<th>Adress2</th>";
        echo"<th>Number</th>";
         echo"<th>Email</th>";
          echo"<th>Vendor Balance</th>";
           echo"</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo"<td>" .$row['id']."</td>";
         echo"<td>" .$row['companyname']."</td>";
          echo"<td>" .$row['Adress1']."</td>";
           echo"<td>" .$row['Adress2']."</td>";
            echo"<td>" .$row['number']."</td>";
             echo"<td>" .$row['email']."</td>";
              echo"<td>" .$row['vendorb']."</td>";
           
            echo"<tr>";
        
    }
    echo"</table>";
} else {
    echo "0 results";
}
mysqli_close($connection);
?>