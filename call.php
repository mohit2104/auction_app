 <?php

   include("config.php");
   mysql_select_db("pragyan14_ppl_round2");
   $count=$_POST['x'];
   
		$result= "SELECT  * FROM `batsmen` LIMIT ".$count.",".$count+1." ";
		$r=mysql_query($result);
               while($s=mysql_fetch_array($r))
			{   echo $s[1].",".$s[2].",".$s[3];
//echo $s[2];
}
			?>




