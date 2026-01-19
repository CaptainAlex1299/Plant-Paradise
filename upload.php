<?php
session_start();
require "functions.php";
$id = $_SESSION['user_id'];
echo $id;
if(isset($_POST['submit'])){
        $file = $_FILES['file'];
    
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
        if(in_array($fileActualExt, $allowed)){
    
          if($fileError === 0){
            if($fileSize < 500000){
              $fileNameNew = "profile".$id. ".".$fileActualExt;
              $fileDestination = 'uploads/'.$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
              $sql1 = "UPDATE profileimg SET status= 0 WHERE userid= '$id';";
              $sql = "UPDATE profileimg SET imgtype='$fileActualExt' WHERE userid= '$id';";
              $result = mysqli_query($conn,$sql);
              $result1 = mysqli_query($conn,$sql1);
              echo "image uploaded";
              //header("Location: logedin.php");
            }
            else{
              echo "img file size is too big";
            }
    
          }else{
            echo "there was an error uploading ur file";
          }
    
        } else{
          echo "you cannot upload files of this type!";
        }
    
      }
      ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
	<style type="text/css">

		.form-bg{
		background-color: black;
		color: white;
		position: fixed; 
        top: 0;
        left: 0; 
        right: 0;
        bottom: 0;
        margin: auto; 
          z-index: 2;
          max-width: 600px;
          height: 100%;
          max-height: 900px;
          opacity: 1;
          transition: 0.5s;
          border: solid 2px;
          border-radius: 25px;
		}
		body{
			background-color: black;
		}

	</style>
	<title>upload image</title>
	
</head>
<body>

	
  
	
 	<div class="form-bg" style="width: 500px; height:500px;">
		<div style="text-align: center;">
			<hr>

			<form action="upload.php" method="POST" enctype="multipart/form-data" id="profilepic">
    <input class="formstyle custom-file-upload" type="file" name="file">
    <button class="formstyle btn btn-outline-dark" type="submit" name="submit">upload</button>
    </form>
		</div><br>
	</div>

</body>
</html>