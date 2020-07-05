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
	width:100%;
	background:#663300;
	 
}
.middle table{
	margin-left:5px;
	margin-top:20px;
}
.middle table a{
	text-decoration:none;
}
.middle table td{
	background:white;
	text-align:center;
	padding-top:10px;
	height:120px;
	width:200px;
	border-radius:18px;
	border:2px solid black;
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
<div class="middle">


<table>
<tr>
<?php
$n = $name;
$query = "SELECT * FROM `status` WHERE name ='$n'";
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
	   echo "<td> <embed src='$statussorce' autoplay='off' height='100px' width='200px'></embed><br>Uploded By $nme<br>
          <a href='#'><i class='fa fa-heart' aria-hidden='true'></i>&nbsp&nbsp$lik</a>&nbsp&nbsp	  
          <a href='statusdelete.php?pre=$statussorce'><i class='fa fa-trash' aria-hidden='true'></i></a>	  
         </td>";
}
?>
<tr>
</table>
</div>
</body>
</html>