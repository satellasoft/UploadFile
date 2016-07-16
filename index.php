<!doctype html>
<html lang="pt-br">
	<head>
		<title>Upload Files</title>
		<meta charset="utf-8" />
		<style>
			*{
				margin: 0 auto;
				padding: 0 ;
			}
			
			body{
				backgorund-color: #CCC;
			}
			
			#dvCenter{
				width: 500px;
				background-color: #FFFFFF;
				border: 3px solid #EEE;
				border-radius: 5px;
				padding:10px;
				margin-top: 200px;
			}
			
			select{
				padding: 5px;
				margin: 5px;
			}
			
			input[type=submit]{
				padding: 5px;
				margin: 5px;
			}
			
			input[type=file]{
				padding: 5px;
				margin: 5px;
			}
			
		</style>
	</head>
	<body>
		<div id="dvCenter">
			<form method="post" name="frmUpload" enctype="multipart/form-data">
				<p>Select: 
							<input type="file" name="fl" /></p>
							
				<p>Type:
						<Select name="slType">
							<option value="img">Image<option>
							<option value="file">File<option>
						</select>
						<input type="submit" value="Upload" name="btnSubmit" />
						</p>
			</form>
			
			<br />
			<?php
				if(filter_input(INPUT_POST, "btnSubmit")){
					require_once("Upload.php");
					$upload = new Upload();
					
					$file = $upload->LoadFile("img", filter_input(INPUT_POST, "slType"), $_FILES["fl"]);
					
					if($file != ""){
						echo "<a href=\"img/{$file}\" target=\"_blank\">Access</a>";
					}else{
						echo "Error to upload file. Try again!";
					}
				}
			?>

		</div>
	</body>
</html>