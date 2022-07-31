<!doctype html>
<html>
<head>
<title>Pos sales</title>
<style>
.boy {
    width: 300px;
    padding: 15px;
    border: 5px solid brown;
    margin: 5px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: relative; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 10%;
  top: 0;
  width: 80%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  border-radius: 20px;
  
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 5px;
  border: 1px solid #888;
  width: 60%;
  border-radius: 30px;
  text-align: center;
  margin-top: -4%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 25px;
  font-weight: bolder;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
input[type=submit]{
    background-color:; /* Green */
    border: none;
    color: white;
    
    text-align: center;
    text-decoration: none;
    display: inline-block;

    margin: ;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #555555;
    color: white;
}
</style>	
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<form style="border: solid black 1px;background-color: beige;">
<label style="padding-right: 2px; padding-left: 7%;">Document  No: <label style="color: red;"><strong>Auto</strong></label></label>


    <label for="gender">Payment Mode</label>
    <select id="" name="gender">
      <option value="CASH"> CASH</option>
      <option value="POS">POS</option>
      <option value="TRANSFER">TRANSFER</option>
        <option value="CHEQUE">CHEQUE</option>
    </select>
    <?php echo "Date :" . date("h:i:sa");?> 
    <label style="padding-right: 2px; padding-left: 7%;">Time:   <label style="color: red;"><strong>Auto</strong></label></label>

<form>
  <label>Posting Group :</label><input type="text" name=""><br />
  <h3 class="boy">           </h3> 
  <label style="padding-right: 2px; padding-left: 7%; position: absolute; top: 50px; left:400px;">Out Standing Balance:   <label style="color: red;"><form> <input type="text"placeholder="0.00"></form></label></label>
  <label style="padding-right: 2px; padding-left: 7%; position: absolute; top:40px; left:1000px;"> Balance limit:   <label style="color: red;"><form><input type="text" placeholder="0.00"></label></label>
  

</form>


</div>
</div>
</div>

<form>
<label></label>

</form>
<button id="myBtn">&#9769 Add New Product</button>

 <?php
include "config.php";
$select="SELECT * FROM category";
$result=mysqli_query($connection,$select);
if(!$result){
  echo "<script> alert('Failed');
  window.location = 'home.php?Failed';
  </script>";
  return false;
}while($row=mysqli_fetch_array($result)){
      
      $catmane=$row['category_name'];
      }


?>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<h1>Product card (new product)</h1>
<form action="" method="post" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()">
    <label>Product Code</label>
    <input type="text" value="                AUTO     " name="auto"><br><br>
    <label>Product Description</label>
    <input type="text" name="productdescript" id="productdescript"><br><br>
    <div id="empty1"></div>
    <label>Product Category</label>
    <select id="categories" name="categories">
   
<option disabled="disabled" selected="selected"></option>
    <option><?php echo $catmane ;?></option>
</select>
<div id="empty2"></div><br><br>
<label>Expire Date</label>
    <input type="date" id="date" name="date" value="<?php echo date('m d,Y')  ?>"><br><br>
    <div id="empty3"></div>
    <label>Re-Order Quantity Limit</label>
    <input type="number" id="number" name="number"><br><br>
    <label>Cost Price</label>
    <input type="text" name="costprice" id="costprice" value="0,00"><br><br>
    <div id="empty5"></div>
    <label>Retail Selling Price</label>
    <input type="text" name="retail" id="retail" value="0,00"><br><br>
    <div id="empty6"></div>
    <label>Wholesales Price</label>
    <input type="text" name="whoprice" id="whoprice" value="0,00"><br><br>
    <div id="empty7"></div>
    <label>Pack Quantity</label>
    <input type="number" name="pquantity" id="pquantity"><br><br>
    <div id="empty8"></div>
    <input type="submit" name="save" value="Save" style="height: 20%; width: 30%; border-collapse: collapse; border-radius: 15px; background-color: red; color: white; font-size: 24px;"/>
    
    </form>
    </div>
    </div>



    <script>
function validateForm() {
  var productdescript = document.forms["myForm"]["productdescript"].value;
   var categories=document.forms["myForm"]["categories"].value;
    var date=document.forms["myForm"]["date"].value;
     var number=document.forms["myForm"]["number"].value;
       var costprice=document.forms["myForm"]["costprice"].value;
        var retail=document.forms["myForm"]["retail"].value;
        var whoprice=document.forms["myForm"]["whoprice"].value;
        var pquantity=document.forms["myForm"]["pquantity"].value;
  if (productdescript== "") {
   document.getElementById("empty1").innerHTML="Product Description Cannot be Empty*";
    return false;
  }
  if (categories == "") {
   document.getElementById("empty2").innerHTML="Product Category Cannot be Empty*";
    return false;
  }
   if (date == "") {
   document.getElementById("empty3").innerHTML="Date Cannot be Empty*";
    return false;
  }
  // if (number == "") {
   //document.getElementById("empty4").innerHTML="Fields Cannot be Empty*";
   // return false;
 // }
	 if (costprice == "") {
   document.getElementById("empty5").innerHTML="Cost Price Cannot be Empty*";
    return false;
  }
  if (retail == "") {
   document.getElementById("empty6").innerHTML="Retails Price Cannot be Empty*";
    return false;
  }
  if (whoprice == "") {
   document.getElementById("empty7").innerHTML="Wholesales Price Cannot be Empty*";
    return false;
  }
  if (pquantity == "") {
   document.getElementById("empty8").innerHTML="Quantity Cannot be Empty*";
    return false;
  }
}
</script>

</div>

</body>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</html>