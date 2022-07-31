<!doctype html>
<html>
<head>
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
<title>Pos sales</title>
<style>
.boy {
    width: 300px;
    padding: 15px;
    border: 5px solid brown;
    margin: 5px;
}



</style>

</head>


<body>


<div class="container">
<div class="row">
<div class="col-lg-12">
<form style="border: solid black 1px;background-color: beige;">
<label style="padding-right: 2px; padding-left: 7%;">Receipt No: <label style="color: red;"><strong>Auto</strong></label></label>


    <label for="gender">Payment Mode</label>
    <select id="" name="gender">
      <option  value="CASH"> CASH</option>
      <option value="POS">POS</option>
      <option value="TRANSFER">TRANSFER</option>
        <option value="CHEQUE">CHEQUE</option>
    </select>
    <?php echo "Date :" . date("h:i:sa");?> 
    <label style="padding-right: 2px; padding-left: 7%;">Time:   <label style="color: red;"><strong>Auto</strong></label></label>

<form>
  <label >Customer Name :</label><input type="text" name=""><br />
  <h3 class="boy">           </h3> 
  <!--label style="padding-right: 2px; padding-left: 7%; position: absolute; top: 50px; left:400px;">Out Standing Balance:  
                   <label style="color: red;"><form> <input type="text"placeholder="0.00"></form></label></label--!>
  <!--label style="padding-right: 2px; padding-left: 7%; position: absolute; top:40px; left:1000px;"> Balance limit: 
    <label style="color: red;"><form><input type="text" placeholder="0.00"></label></label--!>
  

</form>


</div>
</div>
</div>

<form>
<header>
			<h1>Invoice</h1>
			<address contenteditable>
				<p>DHEEMAX</p>
				<p>OANDO. Filling station<br>Academy,Ibadan</p>
				<p>(+234) 7039 001 643</p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p>Some Company<br>c/o Some Guy</p>
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>101138</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable><?php echo date('M d,Y'); ?> </span></td>
				</tr>
<tr>
					<th><span contenteditable>Customer's Name</span></th>
					<td><span contenteditable>Customer</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due</span></th>
					<td><span id="prefix" contenteditable>#</span><span>600.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
                    <?php
                    include"config.php";
                    $select = "SELECT description FROM app";
                    $result = mysqli_query($connection,$select);
                    if(!($result)){
                        echo "error";
                    }while($row = mysqli_fetch_array($result)){
                        $description= $row['description'];
                    }

                    ?>
						<th><span contenteditable>Item</span></th>
                        
						<th><span contenteditable>Description</span>
      
      
<th><span contenteditable>Rate</span></th>
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
				<tbody>
					<!--tr>
						<td><a class="cut">-</a><span contenteditable></span>recharge</td>
						<td><span contenteditable></span>good</td>
						<td><span data-prefix>#</span><span contenteditable>selling price</span></td>
						<td><span contenteditable></span>no of product bought</td>
						<td><span data-prefix>#</span><span>price</span></td>
					</tr-->
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>#</span><span>600.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span data-prefix>#</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><span data-prefix>#</span><span>600.00</span></td>
                   
				</tr>
			</table>
            
<a href="sold_out.php" style="border: none; border-radius: 18px; float:right; height: 30px; width: 120px; background-color: 
          greenyellow; color: white; margin-top:15%; text-align: center;">print</a>
            </form>
		</article>
        
         
        
		<aside>
			<h1><span contenteditable>Additional Notes</span></h1>
			<div contenteditable>
				<p>Thank you for buying with us.Kindly Note that goods bought are not returnable.</p>
			</div>
		</aside>
      
</body>
</html>