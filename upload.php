<html>
	<head>
		<title>Uploading a file</title>
	</head>
	<body>

	<form enctype='multipart/form-data' method='post' action='upload.php'>
		<h1>Image 1</h1>
		<input type='file' name='file1' /><br><br>
        <input id="t1" type="text" name="tag11">
        <input id="t2" type="text" name="tag12">
        <input id="t3" type="text" name="tag13">
		
		<h1>Image 2</h1>
		<input type='file' name='file2' /><br><br>
        <input id="t4" type="text" name="tag21">
        <input id="t5" type="text" name="tag22">
        <input id="t6" type="text" name="tag23">
		
		<h1>Image 3</h1>
		<input type='file' name='file3' /><br><br>
		<input id="t7" type="text" name="tag31">
        <input id="t8" type="text" name="tag32">
        <input id="t9" type="text" name="tag33">
		
		<br><br><input type='submit' />

	</form>

	<?php
		if(isset($_FILES['file1']))
		{
			//Accessing the file information
			$file1_name = $_FILES["file1"]["name"];
			$file1_temp_location = $_FILES['file1']['tmp_name'];
			
			$tempA = explode(".", $file1_name);
			
			$string1 =  $_POST['tag11'] . ", " . $_POST['tag12'] . ", " . $_POST['tag13'];
			$foldername="./uploads/";
			
	        $filename= strtolower($tempA[0]) . ".txt";
	        file_put_contents($foldername.$filename, $string1);
			
			$file_ext = strtolower($tempA[1]);
			//echoing the file information
			echo "File name: " . $file1_name . "<br>";
			echo "Temp location: " . $file1_temp_location . "<br>";

			//Moving the file to a permanent location on the server, may not work on DC server
			$destination = "./uploads/" . $file1_name;
			
	        if($file_ext === 'jpeg' || $file_ext === 'png' || $file_ext === 'gif'){
			if (move_uploaded_file($file1_temp_location, $destination)) {
				echo "The file ". $file1_name . " has been uploaded and moved to " . $destination . ".";
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}
			}
			else{
				echo "you need upload a image" .$file_ext;
			}

	

		

		}
		else
		{
			echo "<p>No file uploaded yet</p>";
		}
		
	
	   		if(isset($_FILES['file2']))
		{
			//Accessing the file information
			$file1_name = $_FILES["file2"]["name"];
			$file1_temp_location = $_FILES['file2']['tmp_name'];
			
			$tempA = explode(".", $file1_name);
			
			$string1 =  $_POST['tag21'] . ", " . $_POST['tag22'] . ", " . $_POST['tag23'];
			$foldername="./uploads/";
			
	        $filename= strtolower($tempA[0]) . ".txt";
	        file_put_contents($foldername.$filename, $string1);
			
			$file_ext = strtolower($tempA[1]);
			//echoing the file information
			echo "File name: " . $file1_name . "<br>";
			echo "Temp location: " . $file1_temp_location . "<br>";

			//Moving the file to a permanent location on the server, may not work on DC server
			$destination = "./uploads/" . $file1_name;

			if($file_ext === 'jpeg' || $file_ext === 'png' || $file_ext === 'gif'){
			if (move_uploaded_file($file1_temp_location, $destination)) {
				echo "The file ". $file1_name . " has been uploaded and moved to " . $destination . ".";
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}
			}
			else{
				echo "you need upload a image";
			}

		}
		else
		{
			echo "<p>No file uploaded yet</p>";
		}

		
		if(isset($_FILES['file3']))
		{
			//Accessing the file information
			$file1_name = $_FILES["file3"]["name"];
			$file1_temp_location = $_FILES['file3']['tmp_name'];
			
			$tempA = explode(".", $file1_name);
			
			$string1 =  $_POST['tag31'] . ", " . $_POST['tag32'] . ", " . $_POST['tag33'];
			$foldername="./uploads/";
			
	        $filename= strtolower($tempA[0]) . ".txt";
	        file_put_contents($foldername.$filename, $string1);
			
			$file_ext = strtolower($tempA[1]);
			//echoing the file information
			echo "File name: " . $file1_name . "<br>";
			echo "Temp location: " . $file1_temp_location . "<br>";

			//Moving the file to a permanent location on the server, may not work on DC server
			$destination = "./uploads/" . $file1_name;

			if($file_ext === 'jpeg' || $file_ext === 'png' || $file_ext === 'gif' ){
			if (move_uploaded_file($file1_temp_location, $destination)) {
				echo "The file ". $file1_name . " has been uploaded and moved to " . $destination . ".";
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}
			}
			else{
				echo "you need upload a image";
			}

		}
		else
		{
			echo "<p>No file uploaded yet</p>";
		}
	?>

	</body>
</html>
