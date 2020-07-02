<style>
body{
margin:0;
padding:0;
height:500;
width:1024;
background-image: url('img/loginback1.jpg');
}
.outer{
margin-left:362;
margin-top:128;
height:250;
width:350;	
background-image: url('img/loginback.jpg');	
color:white;
}
.outer a{
	
	text-decoration:none;
	color:white;
	
}
.outer button{
	
	background:green;
	border:2px solid white;
	font-size:15px;
	
}
table{
	width:330;
	height:210;
	margin-left:20px;
	padding-top:40px;
}
table td{
	color:white;
}
</style>
<html>
<body>
<div class="outer">
<form action="" method="POST" enctype="multipart/form-data">
<table id="login" width="200">
<tr> 
     <td>Email :</td> 
     <td><input type="text" name="email"> </input> </td> 

</tr>
<tr> 
     <td>New Password :</td> 
     <td><input type="text" name="pass"> </input> </td> 

</tr>
<tr> 
     <th colspan="2"><input type="submit" name="submit"></input></th>  

</tr>
<tr> 
      <th colspan="2"> <button><a href="status.php">Back</a></button></th>

</tr>
</table>
</div>
<?php
include("connection.php");
session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
	$eml = $_POST['email'];
	$pwd = $_POST['pass'];
	
	$query ="UPDATE information SET password ='$pwd'  WHERE email ='$eml'";
    $data = mysqli_query($conn,$query);

   if($data)
   {
	   echo "<script>alert('password changed')</script>" ;
	   
   }
   else
   {
	   echo"fail";
   }
}
	
?>
</form>
</body>
</html>