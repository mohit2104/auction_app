<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("pragyan14_ppl_round2");
if(isset($_POST['tname']) && isset($_POST['pplid']))
{
$tname=$_POST['tname']; $pid=$_POST['pplid'];
if(isset($_POST['submit'])){
 if($tname !=NULL && $pid !=NULL)
  { 
   $query=mysql_query('INSERT INTO `Teams` (`T_name`,`Pid`) VALUES ("'.$tname.'","'.$pid.'") ' );   
   
  if($query)
  echo "Well Done !!Your Team has been Registered for PPL Live Auction";
  else
  echo "This Registration is invalid";
}
else
  echo "Please fill all entries!";
}
echo "<h2>team No : $_POST["team_number"]</h2>";
}

echo "
<!doctype html>
<html>
<head>

	<link rel='stylesheet' type='text/css' href='style.css' >
	<title>Register</title>
</head>
<body>	
	       <h1>Register</h1>
		   echo $_GET['team_number'];
		<form method='post' action='registeration.php?team_number=($_GET['team_number']+1)'>
			<h4>Team Name:</h4>
			<input type='text' name='tname' />
                        <h4>PPL_ID:</h4>
			<input type='text' name='pplid' />
			<h4>Register:</h4>
			<input type='submit' name='submit' />
		</form>
 
	<a href='auction.php'><h3>Go To Auction Page</h3></a>
</body>
</html>";
?>