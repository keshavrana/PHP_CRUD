<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `student` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Inserted Successfully";
    }
    else{
        echo "kuch to gadbad hai ";
    }
}

//$select = "SELECT * FROM `student`";
$selectquery = "select * from student ";
$query = mysqli_query($conn,$selectquery);
$result1 = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <p>Name: <input type="text" name ="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <button type="submit" name="submit">Submit</button>
    </form>

    <br><br>

    <table>
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="2">Action</th>
        </thead>
        <tbody>
            <?php
            while($result1 = mysqli_fetch_assoc($query)){
            ?>
            <tr>
            <td><?php echo $result1['name'];  ?></td>
            <td><?php echo $result1['email'];  ?></td>
            <td><?php echo $result1['password'];  ?></td>
            <td><a href="update.php?id=<?php echo $result1['id'];  ?>"><i class="fa fa-edit fa-2x" style="color:green" aria-hidden="true"></i></a></td>
            <td><a href="delete.php?id=<?php echo $result1['id'];  ?>"><i class="fa fa-trash fa-2x" style="color:red" aria-hidden="true"></i></a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        
    </table>
    
</body>
</html>