<?php
include 'dbcon.php';
$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE id=$id";
$result = mysqli_query($conn,$sql);
$result1 = mysqli_fetch_assoc($result);
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "UPDATE student SET name='$name',email='$email',password='$password' WHERE id=$id";
    $sql1 = mysqli_query($conn,$sql);
    if($sql){
        echo "Deleted Successful";
        ?>
        <script>
            location.replace("index.php");
        </script>
    
        <?php
    }
    else{
        echo "not updated";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the Tables</h1>
    <form action="" method="post">
        <p>Name: <input type="text" name ="name" value="<?php echo $result1['name']; ?>"></p>
        <p>Email: <input type="text" name="email" value="<?php echo $result1['email']; ?>"></p>
        <p>Password: <input type="password" name="password" value="<?php echo $result1['password']; ?>"></p>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>