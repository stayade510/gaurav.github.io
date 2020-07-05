
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php

error_reporting(0);

include("connection.php");
$query = "SELECT * FROM status";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);
 
 echo "$result";
 $statussorce = $result['media'];
 

echo"<i class='fa fa-heart' aria-hidden='true' onclick='like()'></i>
<script>

function like()
{  
   
  alert('$statussorce');
}	
</script>";
?>

</body>
</html>
<!--<script>
 function likk()
  {
	  var c = '<?php 
	            $query = "SELECT * FROM status";
                 $data = mysqli_query($conn,$query);
                 $total = mysqli_num_rows($data);
                  $result = mysqli_fetch_assoc($data);
                  $lik = $result['likke'];
				  $med = $result['media'];
				  $lik = $lik +1;
				  
				  $query ="UPDATE status SET likke ='$lik'  WHERE media ='$med'";
                  $data = mysqli_query($conn,$query);
				  echo "$lik";
				  
				  ?>';
        
	 
  }
 
</script>


<i class='fa fa-heart' aria-hidden='true' onclick='likee()'></i>-->



/*<script>

function lik()
{
	<?php
 $query = "SELECT * FROM status";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);
	
 $lik = $result["likke"];
 $lik++;
 echo $lik;
	?>
}	
</script>';*/

 
   <form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile" ></input>
<input type="submit" name="submit"></input>
</form>

<table>
<?php
$n = $_SESSION['nm'];
if($_POST['submit'])
{	
   $foldername = $_FILES["uploadfile"]["name"];
   $tempname = $_FILES["uploadfile"]["tmp_name"];
   $folder = "statusmedia/".$foldername;
   move_uploaded_file($tempname,$folder);
   $query = "INSERT INTO status VALUES('$n','$folder')";
   $data = mysqli_query($conn,$query);
	
}   
   $query = "SELECT * FROM status";
   $data = mysqli_query($conn,$query);
   $total = mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);
   
    $statussorce = $result['media'];
	$sn = $result['$name'];
     echo "<tr>";
	 echo "<td> <embed src='$statussorce' autoplay='false' height='250px' width='450px'></embed><br>$sn </td>";
     echo "</tr>";		  
	 
	



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
          $cmt	   
         </td></tr>";
 
		
}



?>

