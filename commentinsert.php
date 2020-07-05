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
     <td>Write Your Comment :</td> 
     <td><input type="text" name="comment"> </input> </td> 

</tr>
<tr> 
     <th colspan="2"><input type="submit" name="submit"></input></th>  

</tr>
</table>
</div>
</form>
</body>
</html>

<?php
include("connection.php");

$media = $_GET['pre'];


$query ="SELECT `name`, `media`, `comment`, `likke` FROM `status` WHERE media ='$media'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$nam = $result['name'];
$medianame = $result['media'];
$oldlike = $result['likke'];
$oldcoment = $result['comment'];


if($_POST['submit'])
{	
  $ct = $_POST['comment'];
  
    $query = "INSERT INTO status VALUES('$nam','$medianame','$comment','$oldlike') "; 
    $data = mysqli_query($conn,$query);

     if($data)
     {
	    echo "<center><font color='red'>तुमची नोंदणी यशस्वी पूर्ण झालेली आहे . </font></center>" ;
     }
  }
  else
  {
	  echo "कृपया पूर्ण माहिती भरा .";
  }
}

header('location:status.php');

?> 