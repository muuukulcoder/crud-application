<?php 
date_default_timezone_set('Asia/Calcutta');
include 'database/config.php';
$roll=$_POST['roll'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$father=$_POST['father_name'];
$mother=$_POST['mother_name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$image=$_FILES['image'];
$date = date('Y-m-d');
// echo print_r($image);
$filename = $image['name'];
$tempName = $image['tmp_name'];
$fileError = $image['error'];
$fileExt = explode('.', $filename);
$fileCheck = strtolower(end($fileExt));
$fileStore = array('png', 'jpg', 'jpeg', 'gif');
$imagemainFile = in_array($fileCheck, $fileStore);
if($imagemainFile){
    if($fileError==0){
      $filedest = 'images/'.$filename;
      move_uploaded_file($tempName,$filedest);
      $insert="insert into student(roll,fname,lname,father,mother,mobile,email,image,create_at)values('$roll','$fname','$lname','$father','$mother','$mobile','$email','$filedest','$date')";

      $insertQ = mysqli_query($conn,$insert);
      if($insertQ==true){
        ?>
        <script>
            alert("Insert sucessfully!");
            location.replace("index.php");
        </script>
        <?php
      }else {
        ?>
        <script>
            alert("Insert Not sucessfully try again!!!");
            location.replace("addnew.php");
        </script>
        <?php
      }
    }
}


?>