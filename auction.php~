<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
<script type="text/javascript" src='jquery.js'> </script>
</head>
<body>

<img src='' id='player'  alt="loading.."></img>
<div id='stats'></div>
<div class='f1' id=104423>Team1: 104423</div>
<div class='f2' id=103494>Team2: 103494</div>
<div class='f3' id=105156>Team3: 105156</div>
<div class='f4' id=100346>Team4: 100346</div>
<div class='f5' id=101202>Team5: 101202</div>
<div class='f6' id=101195>Team6: 101195</div>
<div class='f7' id=100919>Team7: 100919</div>
<div class='f8' id=102432>Team8: 102432</div>


<input type="text" name='team' id='teams' placeholder="Team Number" style="position:absolute;left:44%;top:93%" autofocus="true"> 
<script>
var i=1;
   $(document).ready(function() {
      $(document).keydown(function(e){
    if(e.which==39){
 $.ajax({ 
          type:'POST',  
	  url: "call.php",
	  data: {plID:i}
         
})

	 .done(function(data){
	    	document.getElementById('player').src=data;
               
           i++;  	
	  }); 
 }

 if(e.which==37){ i--;
 $.ajax({ 
          type:'POST',  
	  url: "call.php",
	  data: {plID:i}
})

	 .done(function(data){
	    	document.getElementById('player').src=data;
            	
	  }); }




	});

 $("#teams").keydown(function(e){
   if(e.which==13){
   
    $.ajax({ 
          type:'POST',  
	  url: "call.php",
	  data: { pid: $('#teams').val()}
})

	 .done(function(data){
	    	document.getElementById(data).innerHTML='abhi';
            	
	  });



}

});  

}
</script>





</body>



</html>
