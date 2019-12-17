<?php

session_start();

	if(isset($_SESSION['abc'])){
?>

<html>
<head>
<link rel="stylesheet type="text/css" href="mystylehome.css">
</head>
<body style="background-color:gray" background="lab.jpg">
<?php
	

	

	
  
	

	 echo"<h3 style='color:blue'><center>WELCOME ADMIN</center></h3><br/><br/>";
	
	 echo"<div class='bg-img'>
	 <div class='container'>
	 <div class='topnav'>
	 
	 
	 
	 <a href='logout.php'>log out</a>
	 
	 <a href='salesmanreg.php'>Register signup</a>
	 <a href='showsalesman.php'>Register detail</a>
	 <a href='salesmansearch.php'>Register search</a>
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