<?php
include 'database/config.php';
$roll=$_POST['roll'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$father=$_POST['father_name'];
$mother=$_POST['mother_name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$update = "update student set fname='$fname',lname='$lname',father='$father',mother='$mother',mobile='$mobile',email='$email' WHERE roll = '$roll'";
$query = mysqli_query($conn,$update);
if($query==true){
    ?>
<script>
alert("Data has been Update Successfully");
location.replace("index.php");
</script>
<?php
}else {
    ?>
<script>
alert("Data Update Error!");
location.replcae("index.php");
</script>
<?php
}
?>
