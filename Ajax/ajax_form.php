<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>This is the table</h1>
        <form id="form">
        <p>Name: <input type="text" name="name" id="name"></p>
        <p>Email: <input type="text" name="email" id="email"></p>
        <p>Password: <input type="text" name="password" id="password"> </p>
        <button type="submit" name="submit" id="submit">Submit</button>
        </form>
</body>
</html>
<script>
$(document).ready(function(){
      $("#form").submit(function() {
          event.preventDefault();
                    var name= $("#name").val();
                    var email= $("#email").val();
                    var password= $("#password").val();

                    $.ajax({
                        type: "POST",
                        url: "insert.php",
                        data: "name=" + name+ "&email=" + email +"&password=" + password,
                        success: function(data) {
                           alert("sucess");
                        }
                    });


                });
        });
    </script>
