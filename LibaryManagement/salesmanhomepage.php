<?php

session_start();

	if(isset($_SESSION['abc'])){
?>
<html>
<head>
<link rel="stylesheet type="text/css" href="mystylehome.css">
</head>
<body style="background-color:gray" background="computer.jpg">
<?php
	

	

	
  
	

	 echo"<h3 style='color:blue'><center>WELCOME register</center></h3><br/><br/>";
	
	 echo"<div class='bg-img'>
	 <div class='container'>
	 <div class='topnav'>
	 <a href='addproduct.php'>Instrument add</a>
	 <a href='allproduct.php'>all Instrument</a>
	 <a href='searchproduct.php'>search Instrument</a>
	 
	 
	 <a href='logout.php'>log out</a>
	 
	 
	 </div>
	 </div>
	 </div>";
	


?>
</body>
</html>
<?php
	}
	else{
		echo"invalid user";
	}
?>