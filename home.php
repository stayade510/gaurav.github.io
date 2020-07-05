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
.label{
	height:25;
	width:100%;
	background-color:#A2006D;
	border:1px solid black;
	color:white;
}
.label a{
	text-decoration:none;
	color:#FDEE00;
}
#birth td{
	background-color:#563C5C;
	color:white;
}
#birth p{
	color:#FDEE00;
	font-size:15px;
	font-style:bold;
}
.login{
	height:270px;
	width:198;
	margin-top:300px;
	background:red;
	border:2px solid black;
	background-image: url('img/loginback.jpg');	
	color:white;
	
}
.login table{
	width:70px;
}
.login table td{
	font-size:12px;
}
.login button{
	width:90px;
	height:45px;
	color:white;
	background:#66CC00;
}
.login a{
	text-decoration:none;
	color:white;
	font-size:13px;
}
</style>
<?php
include("connection.php");
session_start();

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
स्वच्छ गाव सुंदर गाव
</div>
<img id="digi" src="img\digi.jpg" alt="dkj" width="230" height="100">
</head>
<body>
<div class="label"><marquee>सर्व गावकरी लोकांना पोर्टल वर नोंदणी करणे अनिवार्य आहे .नोंदणी साठी येथे क्लिक करा <a href="registration.php">(click)</a> </marquee></div>
<table id="birth">
<?php

$query = "SELECT * FROM information";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


$birthdate = $result['bdate'];
$birthmonth = $result['bmonth'];
$birthimage = $result['imgsorce'];

$currdate = date("d");
$currmonth = date("m");

/*echo "<img src='$birthimage' height='100' width='100'/>";
echo $birthdate;
echo $birthmonth;
echo $birthimage;
echo $currdate;
echo $currmonth;*/

if($total != 0 )
{
	echo "<tr>";
	while($result = mysqli_fetch_assoc($data))
	{
		$birthdate = $result['bdate'];
        $birthmonth = $result['bmonth'];
		$birthyear = $result['byear'];
		if($birthdate == $currdate && $birthmonth == $currmonth)
		{
			$birthimage = $result['imgsorce'];
			$birthname = $result['name'];
			echo "<td> <img src='$birthimage' height='100' width='100'/></td>
			       <td> नाव :- $birthname<br>जन्मतारीख :- $birthdate"."-$birthmonth"."- $birthyear<br><p><marquee direction='up'> वाढदिवसाच्या हार्दिक शुभेच्छा <marquee></p></td>";			
		}
	
	}
	echo "</tr>";
}
else
{
   echo "";
}


?>
</table>
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
<td><i class="fa fa-users" ></i> लोकसंख्या :1305</td>
<td><i class="fa fa-th-large" ></i>एकूण वार्ड : 5 </td>
</tr>
<tr>
<td><i class="fa fa-id-card" ></i> मतदार : 1101 </td>
<td><i class="fa fa-female" ></i> महिला : 630</td>
<td><i class="fa fa-male" ></i>पुरुष : 675 </td>
</tr>
</table>
<table id="sliderborder">
<tr> 
<th></th>
<td><div class="sliderback">
<div class="outerbox">
<div class="slider">
<img src="img\i0.jpg"></img>
<img src="img\i1.jpg"></img>
<img src="img\i2.jpg"></img>
<img src="img\i3.jpg"></img>
<img src="img\i4.jpg"></img>
<img src="img\i5.jpg"></img>
<img src="img\i6.jpg"></img>
<img src="img\i7.jpg"></img>
<img src="img\i8.jpg"></img>
<img src="img\i9.jpg"></img>
<img src="img\i10.jpg"></img>
<img src="img\i11.jpg"></img>
<img src="img\i12.jpg"></img>
<img src="img\i13.jpg"></img>
</div>
</div>
</div></td>
<th></th>
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
<div class="center">
<h1> महत्वाच्या जाहिराती आणि बातम्या </h1>
<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
<a href="#"> COVID-19 च्या वाढत्या संक्रमणामुळे गावातील सर्व व्यक्तींनी मास्क लावणे अनिवार्य आहे.</a><br><hr color="red">
<a href="#"> बाहेरील गाववरून आलेल्या व्यक्तींनी आरोग्य चाचणी केल्याशिवाय गावात प्रवेश करू नये .</a><br><hr color="green">
<a href="#"> महात्मा जोतिबा फुले कर्ज माफी योजनेत पात्र लाभर्थ्याची यादी .</a><br><hr color="orange">
<a href="#"> PAN कार्ड काढून मिळेल संपर्ग उमेश राजूरकर.</a><br><hr color="red">
<a href="#"> महत्वाच्या जाहिराती आणि बातम्या</a><br><hr color="green">
<a href="#"> महत्वाच्या जाहिराती आणि बातम्या</a>
</marquee>
</div>
<table class="dright">
<tr>
<th id="gsu" colspan="2">ग्रामसेवक </th>
</tr>
<tr>
<td rowspan="2"><img src="img/srpanch.jp" height="150" width="100"></img></td>
<td>सौ.संध्या रामा निंबोळे</td>
</tr>
<tr>

<td><a href="gramsevk.html">अधिक... </a></td>
</tr>
<tr>
<th id="gsu" colspan="2">सरपंच </th>
</tr>
<tr>
<td rowspan="2"><img src="img/srpanch.jpg" height="150" width="100"></img></td>
<td>श्री.ज्ञानदेव एकनाथ ढगे</td>
</tr>
<tr>

<td><a href="sarpanch.html">अधिक... </a> </td>
</tr>
<tr>
<th id="gsu" colspan="2">उपसरपंच</th>
</tr>
<tr>
<td rowspan="2"><img src="img/srpanch.jp" height="150" width="100"></img></td>
<td>सौ.सुमन संजय बोराडे </td>
</tr>
<tr>
<td><a href="upsarpanch.html">अधिक... </a></td>
</tr>
<!-- </div>--> 
</table>

<div class="login">
<img src="img/loginimg.png" height="195" width="195"/>
<table>
<tr><td><button><a href="registration.php">Registration</a></button></td><td><button><a href="login.php">Login</a></button></td></tr>
</table>
</div>
<footer class="footer">
<p>This website is design for purpose Making a digital village.If you have any complient or problem then send Email.(umeshrajurkar0@gmail.com)</p>
Website Disign By :- UR Umesh(7218172966). 
</footer>


</body>
</html>
