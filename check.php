<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
<script type="text/javascript" src='jquery.js'> </script>
</head>
<body>

<img src='' id='player'  alt="loading.."></img>
<div id='stats'></div>
<div class='f1' id=104423 onclick="f(this)" value="8000000">Team1: 104423<div>800000</div></div>
<div class='f2' id=103494 onclick="f(this)">Team2: 103494</div>
<div class='f3' id=105156 onclick="f(this)">Team3: 105156</div>
<div class='f4' id=100346 onclick="f(this)">Team4: 100346</div>
<div class='f5' id=101202 onclick="f(this)">Team5: 101202</div>
<div class='f6' id=101195 onclick="f(this)">Team6: 101195</div>
<div class='f7' id=100919 onclick="f(this)">Team7: 100919</div>
<div class='f8' id=102432 onclick="f(this)">Team8: 102432</div>


<input type="text" name='team' id='teams' placeholder="Team Number" style="position:absolute;left:44%;top:93%" autofocus="true"> 
<script>
/*
function f(e){
var am=document.getElementById("amount");
$.ajax({ 
			 	
	          	type:'POST',  
			url: "players.php",
	  		data: {id:e.id,player_id:(i-1),name:nm,amount:am}
			}).done(
				function(data)
				{
				e.innerHTML+="<br>"+nm;
				e.value-=am;
				e.childNode[0].innerHTML=e.value;
	  			}
			);
			}
			</script>
*/
<script>
var i=1;

$("body").keydown(function(e)	
{
	alert(e.keyCode);
    	if(e.keyCode==39)
	{
		$.ajax({ 
			 	
	          	type:'POST',  
			url: "call.php",
	  		data: {x:i}
			}).done(
				function(data)
				{
				alert(data);
				document.getElementById('player').src=data;
               
           i++;  	
	  			}
			);
	}


	else if(e.keyCode==37)
	{ 
		i--;
		$.ajax({ 
       			 
       			type:'POST',  
  			url: "call.php",
  			data: {x:i}
			}).done(
					function(data)
					{
						document.getElementById('player').src=data;
               
           i++;  	
  					}

				);

	}		
});
</script>
</body>
</html>
