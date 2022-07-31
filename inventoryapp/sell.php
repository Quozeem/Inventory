<!doctype html>
<html>
<head>
<style>
td{width:500px;
 background-color: pink;}

p.solid {border-style: solid;}




</style>



</head>
<body style="background-color: gray;">

</body>




</html>
<h1><strong>Stock Inventory</strong></h1>
<p class="solid"><a href="sell.php"><strong>Add New</strong></a></p>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "supermarket";

  include_once "config.php";

$sql = "SELECT id,discription ,category,date,price,sellingprice,inventory,Waprice FROM app";
$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
    echo("<center>");
    echo "<table style=border-style:solid;  border='1'> ";
    echo"<tr>";
    echo"<th>s/n</th>";
     echo"<th>discription</th>";
      echo"<th>category</th>";
       echo"<th>date</th>";
        echo"<th>price</th>";
         echo"<th>sellingprice</th>";
          echo"<th>inventory</th>";
           echo"<th>Waprice</th>";
           echo"</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo"<td>" .$row['id']."</td>";
         echo"<td>" .$row['discription']."</td>";
          echo"<td>" .$row['category']."</td>";
           echo"<td>" .$row['date']."</td>";
            echo"<td>" .$row['price']."</td>";
             echo"<td>" .$row['sellingprice']."</td>";
              echo"<td>" .$row['inventory']."</td>";
                 echo"<td>" .$row['Waprice']."</td>";
            echo"<tr>";
        
    }
    echo"</table>";
} else {
    echo "0 results";
}
mysqli_close($connection);
?>
