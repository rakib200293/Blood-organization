

<div class="main-content">
 <h1>Content Area</h1>
 
 <?php
    
	            $name = "Rakib";
				$roll = "200293";
				$reg = "179747";
				$dep = "Computer";
	
	
	

	
	function info(){
				
				global $name;
				global $roll;
				global $reg;
				global $dep;
				global $text;
				
				$text = "Hello How are You";
				
		    	return sprintf('My Name is %s My Department is %s. My Roll is %s My Registration is %s',$name,$dep,$roll,$reg);
	}
	    echo info();
	  
	  echo "<br>";
	  echo "<br>";
	  
	  echo $text;
	
 ?>

</div>