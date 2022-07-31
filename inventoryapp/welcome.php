<?php
session_start ();
if( ($_SESSION['allow']) =="false"){
  echo"<script>location.href='index.php'</script>";
}

?>
<!doctype html>
<html>
<head>
<title>Sales and stock manager</title>
	<link rel="stylesheet" href="cont.css">
<style>
.note{background-color: gray;
    
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.dropbtn {
    background-color: 	#8000ff ;
    color: white;
    padding: 10px;
    font-size: 10px;
    border: none;
    cursor: pointer;
    margin:20px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color:;
}

</style>
</head>
<body>
<div class="note">
<div class="dropdown">
  <button class="dropbtn">General ledger</button>
  <div class="dropdown-content">
    <a href="#">Bank</a>
  
    <a href="#">Expenditure</a>
    
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Stock and inventory</button>
  <div class="dropdown-content">
    <a href="#">product card</a>
    <a href="#">product jornal</a>
    <a href="#">Stock disposal</a>
      <a href="#">physical stock count</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Sales and receivable</button>
  <div class="dropdown-content">
    <a href="#">cash POs</a>
    <a href="#">cashier sales report summary</a>
    <a href="#">sales return</a>
    <a href="#">Customers Acoount</a>
    <a href="#">sales report qty with total</a>
    <a href="#">Transaction Repot Summary</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Purchase and payable</button>
  <div class="dropdown-content">
    <a href="vendor.php">vendor</a>
    <a href="#">purchase invoice</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Report </button>
  <div class="dropdown-content">
  
  </div>
</div>

<div class="dropdown" style="text-decoration: none; padding-right: 2%;">
  <button class="dropbtn">Administrator</button>
  <div class="dropdown-content">
  
    <a href="">Setup</a>
    <ul>
   <button id="myBtn">Product Category</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>Product Category</h1>
    <form action="" method="post">
    <label>Category Code</label>
    <input type="text" value="                AUTO     " name="auto"><br><br>
    <label>Category Name</label>
    <input type="text" name="categoryname"><br><br>
    <input type="submit" name="save" value="Save">
    
    </form>
    <h2>Emport To Excel</h2>
    
    <table>
    <tr>
    <th>S/N</th>
    <th>CATEGORY NAME</th>
    <th>Action</th>
    </tr>
    <?php
include "config.php";
$select="SELECT * FROM categy";
$result=mysqli_query($connection,$select);
if(!$result){
  echo "<script> alert('Failed');
  window.location = 'home.php?Failed';
  </script>";
  return false;
}while($row=mysqli_fetch_array($result)){
       $id=$row['id'];
       $catmane=$row['catname'];


?>
    <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo  $catmane; ?></td>
    <td> <a href="home2.php?edit=<?php echo $row['id'] ;?>">Edit</a></td>
    </tr>
    <?php } ?>
    </table>


    </table>
  </div>
<?php
include "config.php";
if(isset($_POST['save'])){
  //$auto=mysqli_real_escape_string($connection,$_POST['auto']);
  $categoryname=mysqli_real_escape_string($connection,$_POST['categoryname']);
$insert="INSERT INTO categy (catname) VALUES('$categoryname')";
$result=mysqli_query($connection,$insert);
if(!$result){
  echo "<script> alert('Failed');
    window.location = 'home.php?Failed';
    </script>";
    return false;
}
else{
  echo "<script> alert('Record upload successfully');
  window.location = 'home.php?Record upload successfully';
  </script>";
 
}
}
?>
</div>

    <a href="">Account setup</a>
    <a href="">Season Greatings</a>
    </ul>
    <a href="">Backup</a>
   
    
  </div>
</div>


<div class="dropdown">
  <button class="dropbtn">Help</button>
  <div class="dropdown-content">
    <a href="#">About</a>
    <a href="#">Content</a>
    
  </div>
</div>

</div>

<div class="about">
<div class="container" style="background-color: #d9e6f2 ;marging:20%;">
  <div class="row">
  <div class="color">
      <div class="col-lg-12">
     
         <a  style=" background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;margin:40px ;
    background-color:gray;
     border-style: solid;
    border-width: 2px;"href="sell.php">Inventory</a>
          <a style=" background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 2px;
    cursor: pointer;margin:40px ;
    background-color:gray;
     border-style: solid;
    border-width: 2px;" href="pos_sales.php">POS_SALES</a>
           <a style=" background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 2px;
    cursor: pointer;margin:40px ;
    background-color:gray;
     border-style: solid;
    border-width: 2px;"href="inventory.php">PURCHASE</a>
            <a style=" background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 2px;
    cursor: pointer;margin:40px ;
    background-color:gray;
     border-style: solid;
    border-width: 2px;"href="inventory.php">EXIT</a>
                        
</div>
</div>






</div>


</div>
 </div> 
<div class="container">
<div class="row">
<div class="col-lg-12">
<img style="width: 100%;" src="image/index.jpg">


</div>


</div>


</div>

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
</body>
</html>
<strong></strong>