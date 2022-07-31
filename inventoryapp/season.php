


<?php


if (isset($_POST['submit'])) {
    
    $message1 =$_POST['message1'];
    $message2=$_POST['message2'];
    
        if ( $message1 || $message2 ) {
          include_once "config.php";   
        }
        
    $select_query="INSERT INTO message (message1 ,message2) VALUES('$message1','$message2')";
    $result=mysqli_query($connection,$select_query);
    
    if ($result){
         $sucess = "Succefully Registered";
    }
    else{
       echo "failed";
    }
}



?>
<h3>Set Seoson Greeting</h3>
<!doctype html>
<html>
<head>
<style>

body.groove {border-style: groove;
           width:300px;
           height:200px;
           position:absolute;
           left:450px;
           padding:0px;
           top: 100px;
           }
.boy {border-style: groove;
           width:30px;
           height:20px;
           position:absolute;
           left:10px;}
.boyc {border-style: groove;
           width:30px;
           height:20px;
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
<label style="color: ;">Message 1  </label><input type="text" name="message1" ><br />
<label style="color: ;">Message 2</label><input type="text" style="margin: 10px;length:50px;"name="message2" value=""><br />



<input style="color: white; background-color: red;" type="submit" value="POST" name="submit">

</form>
</center>

</body>

</html>

