<?php
$Email = $password = "";
$EmailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Email"])) {
        $EmailErr = "Email is Required";
    } else {
        $Email = $_POST["Email"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is Required";
    } else {
        $password = $_POST["password"];
    }

    if ($Email && $password) {
        include("connection.php");

        $check_Email = mysqli_query($connection, "SELECT * FROM login_tbl WHERE Email='$Email'");
        $check_Email_row = mysqli_num_rows($check_Email);

        if ($check_Email_row > 0) {
            while ($row = mysqli_fetch_assoc($check_Email)) {
                $db_password = $row["password"];
                $db_Account_type = $row["Account_type"];
                if ($password == $db_password) {
                    if ($db_Account_type == "1") {
                        echo "<script>window.location.href='admin.php';</script>";
                        exit; 
                    } else {
                        echo "<script>window.location.href='user.php';</script>";
                        exit; 
                    }
                } else {
                    $passwordErr = "Incorrect password";
                }
            }
        } else {
            $EmailErr = "Email is not registered";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<div class="top-nav">

</div>
<div class="Login-container">
        <h1>Mag login ka muna.</h1>
        <form class="Login-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input value="<?php echo $Email;?> "type="Email" id="Email" name="Email" placeholder="Email">
            <span class="error-message"><?php echo $EmailErr; ?></span>
            <br><br> 
            <input value="<?php echo $password;?>"type="password" id="password" name="password" placeholder="Password">
            <span class="error-message"><?php echo $passwordErr; ?></span>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
   
</body>


<style>
body {
    font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #929292;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

body::before {
            content: "";
            background: url('room.jpg') no-repeat center center;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1; 
            filter: blur(5px);
            }

.top-nav {
    position: absolute;
    top: 20px;
    right: 20px;
}

.top-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.top-nav ul li {
    margin-right: 60px; /* Adjust the margin-right as needed */
}

.top-nav ul li:last-child {
    margin-right: 0; /* Remove margin for the last list item */
}

.top-nav ul li a {
    text-decoration: none;
    color: #ffffff;
    font-size: 18px;
    letter-spacing: 3px;
    display: flex;
    list-style: none;
    gap: 8rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 300;
    font-size: 16px;
    color: #fff;
}


.Login-container {
    background-color: #7b6f03;
    background: transparent;
    color: #f99aaa;
    padding: 20px;
    border-radius: 70px;
    width: 400px;
    text-align: center;
    height: 400px;
    backdrop-filter: blur(-10px);
    margin-right: 80px;
}

.Login-container h1 {
    text-align: center;
    color: white;
    font-size: 50px;
    margin-bottom: 60px;
   
}

.login-wrapper {
    display: flex;
    align-items: center;
    margin-right: 80px;
}

.login-wrapper h1 {
    color: white;
    font-size: 60px;
    animation: fadeInFromTop 1s ease-in-out forwards;
}

.login-wrapper p {
    color: white;
    animation: fadeInFromTop 1s ease-in-out forwards;
    letter-spacing: 3px;
    display: flex;
    list-style: none;
    gap: 8rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 300;
    font-size: 10px;
    color: #fff;
    text-align: justify;

}
.Login-form input[type="Email"],
.Login-form input[type="password"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 50px;
    background: transparent;
    margin: 0 auto 30px auto;
    display: block;
    border: solid -1px;
    border-bottom: 3px solid white;
    outline: none;
    color: white;
    border-radius: 10px;
}

.Login-form input[type="Email"]:focus,
.Login-form input[type="password"]:focus {
    opacity: 0.9;
}

.Login-form input[type="Email"]::placeholder,
.Login-form input[type="password"]::placeholder {
    color: white;
    display: flex;
    list-style: none;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 300;
    font-size: 10px;
    text-align: justify;
}

.Login-form input[type="submit"] {
    width: 200px;
    color: white;
    background-color: rgba(184, 183, 183, 0.301);
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.Login-form input[type="submit"]:hover {
    background-color: #63636367;
    border-color: #63636367;
    color: white;
    transition: 0.3s;
    box-shadow: 0px 2px 0px 0px #63636367, 0 0 25px #63636367, 0 0 50px #63636367;
}

.error-message {
    margin-top: 10px;
    color: rgb(255, 0, 0);
    font-size: 14px;
    font-family: Arial, sans-serif;
    animation: blink 0.3s 5;
}

@keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes fadeInFromTop {
    from {
        opacity: 0;
        transform: translateY(-100%);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.Login-form input {
    animation: shake .2s;
}

@keyframes shake {
    25% { transform: translateX(4px); }
    50% { transform: translateX(-4px); }
    75% { transform: translateX(4px); }
}




</style>
</html>
