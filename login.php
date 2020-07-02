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
height:400;
width:300;	
background-image: url('img/loginback.jpg');	
color:white;
}
h1{
	text-align:center;
}
.outer img{
	margin-left:50;
}
table{
	width:300;
	height:120;
}
table td{
	color:white;
}
</style>
<html>
<body>
<div class="outer">
<h1>Login</h1>
<img src="img/loginimg.png" height="210" width="220"/>
<form action="" method="POST" enctype="multipart/form-data">
<table id="login" width="200">
<tr> 
     <td>&nbsp&nbsp&nbspEmail :</td> 
     <td><input type="text" name="email"> </input> </td> 

</tr>
<tr> 
     <td>&nbsp&nbsp&nbspPassword :</td> 
     <td><input type="text" name="pass"> </input> </td> 

</tr>
<tr> 
     <th colspan="2"><input type="submit" name="submit"></input></th>  

</tr>
<!--<tr> 
     <td>forget password </td> 
     <td><a href="registration.php">New Register</a></td> 

</tr> -->
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
	
	$query ="SELECT * FROM information WHERE email ='$eml' && password ='$pwd'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);

	$photo = $result['imgsorce'];
    $name = $result['name'];

   if($total == 1)
   {
	   $_SESSION['el'] = $eml;
	   $_SESSION['pd'] = $pwd;
	   $_SESSION['ph'] = $photo;
       $_SESSION['nm'] = $name;
	   header('location:status.php');
   }
   else
   {
	   echo "<script>alert('Enter correct details')</script>" ;
   }
}
 else
   {
	   echo"fail";
   }
	
?>
</form>
</body>
</html>