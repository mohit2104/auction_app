<?php

include(config.php);

mysql_select_db("pragyan14_ppl_round2");

$query="INSERT INTO  `pragyan14_ppl_round2`.`player_sold` (
`id` ,
`team_id` ,
`player_id` ,
`player_name` ,
`amount`
)
VALUES (
NULL ,  '".$_POST['id']."',  '".$_POST['player_id']."',  '".$_POST['name']."',  '".$_POST['amount']."'
);";

mysql_query($query);

?>
