<!DOCTYPE html>

<html>
	<head>
		<title>Glob exxample</title>
		 <meta charset="utf-8" />
      <title>Web with Multiple coloum</title>
      <link rel="stylesheet" href="style01.css">
	  
	  <meta name="viewport" content="width=device-width" />
	</head>
	<body>
	<?php
	   $bigarray;
	   $bigarray2;
	   $bigarray3;
	   $arr = array();
       array_push($arr,"SelectAll");
	?>
	<header>
            <h1>
			A web with multiple coloum
			
            </h1> 
     </header>		
	 	
			<div id="photo">
		    <h3>This is a photo gallary</h3>
			<?php
/* Looking through for all image files in the uploads folder  */
            
			$folder = "./uploads/";
			$counter = 0;
			$array = glob("uploads/*.*");
			for($counter =0; $counter<sizeof($array); $counter++){
				//
				$filename = basename($array[$counter]);
	            $explodedfile = explode('.' , $filename);
				$back = strtolower($explodedfile[1]);
	        if($back == 'jpg' || $back == 'png' || $back == 'gif' || $back == 'jpeg') {
		     
			$st = strtolower($explodedfile[0]);
			 
			  foreach (glob("uploads/*.*") as $path) {
//loop through all file to check if have same name
	            $filename1 = basename($path);
	            $explodedfile1 = explode('.' , $filename1);
				$st1 = $explodedfile1[0];
	            if($explodedfile1[1] == 'txt' && $st == $st1) {
  		        $tempFile = file($folder.$filename1) or die('ERROR: Cannot find file');
				$words; 
				foreach($tempFile as $st){
				$words = explode(',', $st);
				}
				foreach($words as $ele){
					$ele = str_replace(' ', '', $ele);
				if(!in_array($ele,$arr)){
					array_push($arr,$ele);
				}
				}
				$string = implode("",$words);
				$filter = "filterDiv ";
				$s = "'"."$filter$string"."'";
				
			//	echo "<figure class=$s><img src='./uploads/" . $filename . "'><figcaption>$string</figcaption></figure>";
				$tempadd  ="img src='./uploads/" . $filename . "'";
				$bigarray2[$tempadd] = $string;
				if(empty($bigarray3)){
					$bigarray3[$tempadd]= $string;
				}else if(!in_array($string,$bigarray3)){
					$bigarray3[$tempadd]= $string;
				}
				
				$tempS = $words[0].",".$words[1].",".$words[2];
				$bigarray["img src='./uploads/" . $filename . "'"] =$tempS;
				
				//foreach($words as $ele){
				//	$eless = str_replace(' ', '', $ele);
  	            }
              }
			  
  	          } 
			}
			if(isset($_POST['submit'])){
		        if($_POST['submit']==$arr[0]){
					foreach($bigarray3 as $key => $value){
					
                   echo "<figure class='pic'><$key><figcaption>$value</figcaption></figure>";
				}
				}
				
				else{
				
				$checkarray=array();
				array_push($checkarray,"xhdda");//just make array not empty
				for($counter =0; $counter<sizeof($arr); $counter++){
				$eles = str_replace(' ', '', $arr[$counter]);
				if($_POST['submit']== $eles){
					echo "You selected  ".$eles;
					foreach($bigarray as $key => $value){
						$tags = explode(",", $value);
					    foreach($tags as $tag){
							$tg = str_replace(' ', '', $tag);
					        if($tg == $eles){
					$s1 = $key;
					if(!in_array($s1,$checkarray)){
					array_push($checkarray,$s1);
					$s2 = $bigarray2[$s1];
                   echo "<figure class='pic'><$s1><figcaption>$s2</figcaption></figure>";
					}
					
					}
					}
					}
				}
				
				}
				
			}
			}
			
			else{
				foreach($bigarray3 as $key => $value){
					
                   echo "<figure class='pic'><$key><figcaption>$value</figcaption></figure>";
				
			}
			}
			
?>
		  </div>
		  
		   <form action="gallery.php" method="post" id="nevg">
		    <ul> 
			  
		      		<?php
			for($counter =0; $counter<sizeof($arr); $counter++){
				$eles = str_replace(' ', '', $arr[$counter]);
				$st = '"'.$eles.'"';
				$st2 = "'".$eles. "'";
				$st1 = $arr[$counter];
				echo"<li><button name = 'submit' value=$st2 )>$st1</button></li>";
			}
			
		
			
			?>
			  
			</ul>
	      </form>
		 
	
	 
		 
		  <section>
		     <h3>This is picture website</h3>
		     <p>hello world, this is a website with multiple coloum layout,</p>
			 <p>below is photo gallary with a lot picture of cats</p>
		  </section>
	
         
	</body>
</html>