<?php
include 'dbcon.php';
$id = $_GET['id'];
$delete = "delete from student where id=$id";
$sql = mysqli_query($conn,$delete);

if($sql){
    echo "Deleted Successful";
    ?>
    <script>
        location.replace("index.php");
    </script>

    <?php
}
else
    echo "Not Delet";

?>