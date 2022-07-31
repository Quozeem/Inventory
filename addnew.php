
<?php


if (isset($_POST['submit'])) {
    
    $description =$_POST['description'];
    $category=$_POST['category'];
      $date=$_POST['date'];
        $price=$_POST['price'];
        $sellingprice=$_POST['sellingprice'];
        $inventory=$_POST['inventory'];
        $Waprice=$_POST['Waprice'];
        if ( $description || $category || $date || $price || $sellingprice || $inventory || $Waprice) {
          include_once "config.php";   
        }
        
    $select_query="INSERT INTO app (description ,category,date,price,sellingprice,inventory,Waprice) VALUES('$description','$category','$date','$price','$sellingprice','$inventory','$Waprice')";
    $result=mysqli_query($connection,$select_query);
    
    if (!$result){
      echo "failed";  
    }
    else{
        echo "<script> alert('successfully added');
        window.location = 'addnew.php';
</script>";
  return true;
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
           border-radius:30px;
           border: 10px solid gray;
           background-color: whitesmoke;
           }
.boy {border-style: groove;
           width:300px;
           height:200px;
           position:absolute;
           left:10px;}
.boyc {border-style: groove;
           width:292px;
           height:200px;
           position:absolute;
           left:400px;
           border-radius: 20px;
           margin-top: -45%;
           }

input[type=text] {
    text-align: center;
    color: pink;
    width: 120px;
    height: 30px;
    margin: 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 5px 5px; 
    padding: 10px 15px 10px 30px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    margin-left: 5%;
}
input[type=date]{
    margin-left: 5%;
    border: 2px solid #ccc;
    border-radius: 4px ;
}
input[type=text]:focus {
    width: 50%;
}
</style>
</head>
<body  class="groove" >
<div class="groove">
<h1 style="text-align: center; font-weight: bolder; font-family: monospace; font-style: inherit; text-transform: uppercase;">Product card (new product)</h1>
<form method="POST" title="fill the fields" style="">
<label style="color: red; font-family: cursive; font-style: italic; margin-left: 3%;">Products Code   </label><br /><input type="text" name="" value="AUTO" disabled="Auto"><br />
<label style="color: red; font-family: cursive; font-style: italic; margin-left: 3%;">Products Description </label><br /><input type="text" style=""name="description" value=""><br />
<label style="color: red; font-family: cursive; font-style: italic; margin-left: 3%;">Products Category </label><br /><input type="text" style=""name="category" value=""><br />
<label style="color: red; font-family: cursive; font-style: italic; margin-left: 3%;">Expiry Date </label><br /><input type="date" style=""name="date" value="">
<div class="boyzs ">
<label style="color: red; font-family: cursive; font-style: italic; margin-left: 3%;">Cost price    </label><br /> <input style="" type="text" name="price"><br />
<label style="color: red; font-family: cursive; font-style: italic; margin-left: 3%;">Retail selling price    </label> <br /><input style="" type="text" name="sellingprice"><br />

</div>

<div class="boyc" style="text-align: center;">
<label>Inventory    </label><br /><input style="" type="text" name="inventory" value="0"><br />
<label>WA price   </label><br /> <input style="" type="text" name="Waprice" value="0.0"><br />
<input type="submit" value="Add product" title="Add product"name="submit" style="width: 150px;height: 30px; color: white; background-color: red; border-radius: 5px; border:5px sienna"/>
</div>

</form>
</div>

</body>

</html>