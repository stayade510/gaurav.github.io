
<style>
#first{
font-size:20;
line-height:0.5;
float:right;
text-align:center;
margin-right:400;
}
p{
font-size:30;
font-style:bold;

}
#digi{
position:absolute;
margin-left:538;
}

#gsu{
background-color:#663300;
color:white;
}
.rationcenter{

}
</style>
<?php
include("connection.php");

?>
<html>
<head>
<hr width="100%" size="20" color="orange">
<title> MY VILLAGE </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<img src="img\digitalindia.jpeg" alt="Girl in a jacket" width="230" height="100">
<div id="first">
<p>आपले गाव अनुराबाद</p>
स्वछ गाव सुंदर गाव
</div>
<img id="digi" src="img\digi.jpg" alt="dkj" width="230" height="100">
</head>
<body>
<div class="menu">
<ul>
    <li id="home"><a class="home" href="home.php" ><i class="fa fa-home" ></i>मुख्यपृष्ठ</a></li>
    <li><a href="#" ><i class="fa fa-university" ></i>ग्रांपंचायत</a>
	   <ul>
		     <li><a href="gramsevk.html" >ग्रामसेवक </a></li>
		     <li><a href="sarpanch.html" >सरपंच </a></li>
		     <li><a href="voter.html" >मतदार यादी </a></li>
		     <li><a href="grampanchyat.html" >अधिक </a></li>
	     </ul>   
    </li>
    <li><a href="school.html" ><i class="fa fa-graduation-cap" ></i>शाळा </a>
          <ul>
		     <li><a href="principle.html" >मुख्याध्यापक </a></li>
		     <li><a href="teacher.html" >शिक्षक  </a></li>
		     <li><a href="school.html" >अधिक </a></li>
	     </ul> 
    </li>
    <li><a href="#" ><i class="fa fa-tree" ></i>शेती </a>
          <ul>
		     <li><a href="https://bhulekh.mahabhumi.gov.in/" >७ बारा  </a></li>
		     <li><a href="https://bhulekh.mahabhumi.gov.in/" >८ अ  </a></li>
	     </ul>	
	</li>
    <li><a href="#" ><i class="fa fa-inr"></i>योजना </a>
	    <ul>
		     <li><a href="https://pmkisan.gov.in" >PMKISAN</a></li>
		     <li><a href="#" >PMSYMY</a></li>
		     <li><a href="https://www.pmjay.gov.in" >आयुष्यमान भारत योजना </a></li>
	     </ul>
	</li>
    <li><a href="contact.html" ><i class="fa fa-phone" ></i>संपर्क </a>
	</li>
    <li><a href="#" ><i class="fa fa-bars" ></i></a> 
	    <ul>
		     <li><a href="registration.php" >नोंदणी </a></li>
	     </ul>
	</li>
</ul>
</div>
<table class="icon">
<tr>
<td><i class="fa fa-map" ></i>क्षेत्रफळ :7638.44 चौ.की.</td>
<td><i class="fa fa-users" ></i> लोकसंख्या : 34,34333</td>
<td><i class="fa fa-th-large" ></i>एकूण वार्ड : 5 </td>
</tr>
<tr>
<td><i class="fa fa-id-card" ></i> मतदार : 1101 </td>
<td><i class="fa fa-female" ></i> महिला : 876</td>
<td><i class="fa fa-male" ></i>पुरुष : 976 </td>
</tr>
</table>
<table class="dleft">
<tr><th>गावातील प्रमुख ठिकाणे </th></tr>
<tr><td><a href="school.html">शाळा </a></td></tr>
<tr><td><a href="temple.html">मंदिर</a></td></tr>
<tr><td><a href="kirana.html">किराणा दुकान </a></td></tr>
<tr><td><a href="esuvidha.html">ई-सुविधा केंद्र</a> </td></tr>
<tr><td><a href="kurshikendra.html">कृषि केंद्र </a></td></tr>
<tr><td><a href="reshan.html">स्वस्त-धान्य दुकान</a> </td></tr>
<tr><td><a href="udyog.html">लघु उदयोग</a>  </td></tr>
<tr><td><a href="saloon.html">सलून</a>  </td></tr>
</table>
<div class="registercenter" style="background-image: url('bk3.jpg');"> 
<h1>नोंदणी फॉर्म</h1>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr><td><label>संपूर्ण नाव </label></td><td><input type="text" name="name" placeholder = "पहिलेनाव   माधिलनाव   आडनाव  " required></input></tr></td>
<tr><td><label>जन्मतारीख </label></td><td><select name="bdate" id="cars" required>
    <option value="day">day</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>
  <select name="bmonth" id="cars" required>
    <option value="month">month</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
  <select name="byear" id="cars" required>
    <option value="year">year</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
  </select></tr></td>
<tr><td><label>फोन नंबर </label></td><td><input type="tel" name="mobile" placeholder=" मोबाइल " pattern="[7-9]{1}[0-9]{9}" maxlength='10'required></input></tr></td>
<tr><td><label>ई-मेल  </label></td><td><input type="email" name="email"></input></tr></td>
<tr><td><label>नवीन पासवर्ड </label></td><td><input type="password" name="pass" required></input></tr></td>
<tr><td><label>फोटो </label></td><td><input type="file" name="image" required></input></td></tr>
<tr><td></td><td colspan="2"><input type="submit" name="submit" value="submit"/></td></tr>
</table>
</form>
<?php
if($_POST['submit'])
{	
  $nm = $_POST['name'];
  $bd = $_POST['bdate'];
  $bm = $_POST['bmonth'];
  $by = $_POST['byear'];
  $mb = $_POST['mobile'];
  $em = $_POST['email'];
  $pw = $_POST['pass'];
  $foldername = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "birthimage/".$foldername;
  move_uploaded_file($tempname,$folder);
  if($nm!="" && $bd!="" && $bm!="" && $by!="" && $mb!="" && $em!="" && $pw!="" && $folder!="")
  {

	$query = "INSERT INTO information VALUES('$nm','$bd','$bm','$by','$mb','$em','$pw','$folder')";
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

	
?>
</div>
<footer class="footer">
<p>This website is design for purpose Making a digital village.If you have any complient or problem then send Email.(umeshrajurkar0@gmail.com)</p>
Website Disign By :- UR Umesh(7218172966). 
</footer>
</body>
</html>


