 <?php

   $db_host = 'localhost';
   $db_user = 'root';
   $db_password = 'abhishek';
   $db_name = 'pragyan14_ppl_round2';
   
   $connect = mysqli_connect($db_host, $db_user ,$db_password);
   $db = mysqli_select_db($db_name,$connect);
 $pid=1;
   $count=$_POST['plID'];
  $pid=$_POST['pid'];
   if($db){
  	
		$query1 = mysqli_query($connect,"SELECT  * FROM `players_photos` WHERE player_id='".$count."' ");
		
	    	$result1 = mysqli_fetch_assoc($connect,$query1);
            	var_dump($result1);
  /*     
if(isset($pid)){
 $query2=mysqli_query($connect,"SELECT * FROM `Teams` WHERE team_no='".$pid."' ");
 $result2=mysqli_fetch_assoc($connect,$query2);
  echo json_encode($result2);

}
*/
}
	


	
	
?>




