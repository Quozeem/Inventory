
<?php


if (isset($_POST['submit'])) {
    
    $discription =$_POST['discription'];
    $category=$_POST['category'];
      $date=$_POST['date'];
        $price=$_POST['price'];
        $sellingprice=$_POST['sellingprice'];
        $inventory=$_POST['inventory'];
        $Waprice=$_POST['Waprice'];
        if ( $discription || $category || $date || $price || $sellingprice || $inventory || $Waprice) {
          include_once "config.php";   
        }
        
    $select_query="INSERT INTO app (discription ,category,date,price,sellingprice,inventory,Waprice) VALUES('$discription','$category','$date','$price','$sellingprice','$inventory','$Waprice')";
    $result=mysqli_query($connection,$select_query);
    
    if ($result){
         $sucess = "Succefully Registered";
    }
    else{
       echo "failed";
    }
}



?>
<!doctype html>
<html>
<head>
<style>

body.groove {border-style: groove;
           width:700px;
           height:500px;
           position:absolute;
           left:300px;
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
</style>
</head>
<body  class="groove" >
<div class="groove">
<h1>Product card (new product)</h1>
<form method="POST">
<label style="color: red;">Products Code   </label><input type="text" name="" value="AUTO" disabled="Auto"><br />
<label style="color: red;">Products Discription </label><input type="text" style="margin: 10px;length:50px;"name="discription" value=""><br />
<label style="color: red;">Products Category </label><input type="text" style="margin: 10px;length:50px;"name="category" value=""><br />
<label style="color: ;">Expiry Date </label><input type="date" style="margin: 10px;length:50px;"name="date" value="">
<div class="boyzs ">
<label>Cost price    </label><input style="margin: 10px;" type="text" name="price"><br />
<label>Retail selling price    </label><input style="margin: 10px;" type="text" name="sellingprice"><br />

</div>

<div class="boyc">
<label>Inventory    </label><input style="margin: 10px;" type="text" name="inventory" value="0"><br />
<label>WA price   </label><input style="margin: 10px;" type="text" name="Waprice" value="0.0"><br />
<input type="submit" value="POST" name="submit">
</div>

</form>
</div>

</body>

</html>