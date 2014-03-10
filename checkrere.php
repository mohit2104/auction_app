<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
<script type="text/javascript" src='jquery.js'> </script>
</head>
<body>

<img src='' id='player'  alt="loading.."></img>
<div id='stats'>
<div style="font-family:cursive;font-size:20px" id="player_name"> players name </div>
</div>
<div class='f1' id="104423" onclick="f(this)" data-value="8000000" ><div style="background:blue;text-align:center;font-size:20px;"><strong>Team1: 104423</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>
<div class='f2' id="103494" onclick="f(this)" data-value="8000000"><div style="background:blue;text-align:center;font-size:20px;"><strong>Team2: 103494</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>
<div class='f3' id="105156" onclick="f(this)" data-value="8000000"><div style="background:blue;text-align:center;font-size:20px;"><strong>Team3: 105156</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>
<div class='f4' id="100346" onclick="f(this)" data-value="8000000"><div style="background:blue;text-align:center;font-size:20px;"><strong>Team4: 100346</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>
<div class='f5' id="101202" onclick="f(this)" data-value="8000000"><div style="background:blue;text-align:center;font-size:20px;"><strong>Team5: 101202</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>
<div class='f6' id="101195" onclick="f(this)" data-value="8000000"><div style="background:blue;text-align:center;font-size:20px;"><strong>Team6: 101195</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>
<div class='f7' id="100919" onclick="f(this)" data-value="8000000"><div style="background:blue;text-align:center;font-size:20px;"><strong>Team7: 100919</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>
<div class='f8' id="102432" onclick="f(this)" data-value="8000000"><div style="background:blue;text-align:center;font-size:20px;"><strong>Team8: 102432</strong></div><div style="background:red">AMOUNT LEFT - 800000</div></div>


<input type="text" name='team' id='amount' placeholder="BID Amount" style="position:absolute;left:44%;top:93%" autofocus="true"> 

<script>
var i=1;
function f(e){
var iden=e.id;
var am=document.getElementById("amount").value;
var nm=document.getElementById("player_name").innerHTML;
$.ajax({ 
			 	
	          	type:'POST',  
			url: "players.php",
	  		data: {id:iden,player_id:(i-1),name:nm,amount:am}
			}).done(
				function(data)
				{
				e.innerHTML+="<br>"+nm;
				e.value-=am;
				e.childNodes[1].innerHTML="AMOUNT LEFT - "+e.value;
	  			}
			);
			}
			
			</script>
<script>


$("body").keydown(function(e)	
{
	
    	if(e.keyCode==39)
	{
		$.ajax({ 
			 	
	          	type:'POST',  
			url: "call.php",
	  		data: {x:i}
			}).done(
				function(data)
				{
				var y=data.split(",");
				document.getElementById('player_name').innerHTML=y[0];
				document.getElementById('player').src=y[1];
               document.getElementById('amount').value=y[2];
			   
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
					var y=data.split(",");
					document.getElementById('player_name').innerHTML=y[0];
						document.getElementById('player').src=y[1];
						document.getElementById('amount').value=y[2];
               
           i++;  	
  					}

				);

	}		
});
</script>
</body>
</html>
