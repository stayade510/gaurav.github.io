<?php
session_start();
error_reporting(0);
$p=$_SESSION['ph'];
$n= $_SESSION['nm'];


if($n == true && $p == true)
{
	
}
else
{
	
	header('location:login.php');
}
?>



<style>
body{
	margin:0;
	padding:0;
	width:100%
	height:auto;
	background:pink;
	
}
.top{
	
	height:50%;
	width:100%;
	background:white;
	background-image: url('img/statustop.jpg');
	

}
.top a i{

	font-size:32;
	color:green;
	
}
.top p img{
	float:right;
}
.top table{
	width:100%;
	height:160px;

	
	
	
}
.top table td{
	
		font-size:21px;

	
	
}
.top table td  button {
	font-size:17px;
	background:green;
		
}
.top table td a{
	text-decoration:none;
	color:white;
}
.middle{
 
	height:auto;
	width:60%;
	background:#663300;
	margin-left:20%;
	 
}
.middle table{
	margin-left:70px;
}
.middle table a{
	text-decoration:none;
}
.middle table td{
	background:white;
	text-align:center;
	padding-top:10px;
	height:270px;
	width:470px;
	border-radius:20px;
	border:2px solid black;
}
h1{
	margin-top:0;
	width:100%;
	font-size:18;
	background:red;
	color:white;
}
.left{
	width:19%;
	height:30%;
	border:1px solid black;
	position:absolute;
	border-radius:25px;
	background:green;
	
}
.left table td{
	color:white;

	
}
.left a{
	text-decoration:none;
	color:white;
}
hr{
	margin-left:0;
	height:5;
	width:190;
	background:white;
}
<?php
include("connection.php");
error_reporting(0);
session_start();
$photo = $_SESSION['ph'];
$name = $_SESSION['nm'];
echo $name;
echo $photo;
?>
</style>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="top">
<p><img src="img/loginimg.png" height="160" width="165"/></p>
<table>
<tr>
<td><img src="<?php echo $photo; ?>" height="140" width="110"/>&nbsp&nbsp<?php echo $name; ?>&nbsp&nbsp&nbsp&nbsp<a href="status.php" ><i class="fa fa-home" ></i></a></td>
<td align="right" valign="bottom"></td>
<td align="right" valign="bottom"><button><a href="changepassword.php" >Change Password</a></button></td>
<td align="right" valign="bottom"><button><a href="logout.php">Logout</a></button></td>
</tr>
</table>
</div>
<h1><marquee>सूचना - तुम्ही अपलोड केलेली पोस्ट ही पब्लिक पोस्ट म्हणून गृहीत धरली जाईल . म्हणून काळजीपूर्वक पोस्ट अपलोड करावी. </marquee></h1>
<div class="left">
<table>
<tr>
<td >&nbsp&nbsp&nbsp&nbspUpload New Post<br><br>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile" ></input><br><br>
<input type="submit" name="submit"></input></form>

</td>

</tr>

<tr>
<td><hr><br>

<a href="userstatus.php?pre = $name">&nbsp&nbspView Uploded Post&nbsp&nbsp<i class="fa fa-eye" aria-hidden="true"></i></a>
</td>
</tr>
</table>


</div>
<div class="middle">


<table>
<?php
if($_POST['submit'])
{	
   $foldername = $_FILES["uploadfile"]["name"];
   $tempname = $_FILES["uploadfile"]["tmp_name"];
   $folder = "statusmedia/".$foldername;
   move_uploaded_file($tempname,$folder);
   $query = "INSERT INTO status VALUES('$name','$folder','','')";
   $data = mysqli_query($conn,$query);
   
     echo "<tr>";
	 echo "<td> <embed src='$folder' autoplay='false' height='250px' width='450px'></embed><br>$name </td>";
     echo "</tr>";	
	
}
$query = "SELECT * FROM status";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

	   
$statussorce = $result['media'];
$nme = $result['name'];
$cmt = $result['comment'];
$lik = $result['likke'];

while($result = mysqli_fetch_assoc($data))
{
  
       
	   $statussorce = $result['media'];
	   $nme = $result['name'];
	   $cmt = $result['comment'];
	   $lik = $result['likke'];
	   echo "<tr><td> <embed src='$statussorce' autoplay='off' height='250px' width='450px'></embed><br>Uploded By $nme<br>
          <a href='likeupdate.php?pre=$statussorce'><i class='fa fa-heart' aria-hidden='true'></i>&nbsp&nbsp$lik</a>	  	  
         </td></tr>";
}
?>
</table>
</div>
</body>
</html>