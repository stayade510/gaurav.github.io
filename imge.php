
<?php
error_reporting(0);
?>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile" ></input>
<input type="submit" name="submit"></input>
</form>

</body>
</html>



<?php

$foldername = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "birthimage/".$foldername;
move_uploaded_file($tempname,$folder);
 echo "<img src='$folder' height='100' width='100'/>";
?>