<?php
include 'database/config.php';
$id = $_GET['id'];
$delete = "delete from student where id = '$id'";
$deleteQ = mysqli_query($conn, $delete);
if($deleteQ==true){
    ?>
<script>
alert("Delete sucessfully..");
location.replace("index.php");
</script>
<?php    
}
?>