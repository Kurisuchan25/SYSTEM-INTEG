<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $concern=$_POST['concern'];

    $sql="insert into `crud` (name,email,phone,concern)
    values('$name','$email','$phone', '$concern')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: display.php?success=true');
        exit();
    }else{
        die(mysqli_error($con));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Fill Up</title>
    <style>
        /* Custom styles */
        body {
            background-color: #12171e;
            padding-top: 50px;
        }
        h2{
            font-size: 50px;
            text-align: center;
            color: white;
            letter-spacing: 3px;
            font-weight: 300;
            color: #fff;
        }
        .container {
            margin-top: 30px;
            max-width: 500px;
            max-height: 700px;
            background-color: gray;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 30px;
            color: white;
            margin-top: 20px;
            line-height: 30px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <h2>Fill Up Concern</h2>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter your phone no" name="phone" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="concern">Concern</label>
                <input type="text" class="form-control" id="concern" placeholder="Enter your concern" name="concern" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    
</body>
</html>
