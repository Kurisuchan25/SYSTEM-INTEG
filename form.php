<?php
include 'connectsss.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $date=$_POST['date'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $payment=$_POST['payment'];



    $sql="insert into `crud` (name,contact,date,checkin,checkout,payment)
    values('$name','$contact','$date', '$checkin' , '$checkout' , '$payment')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: displayed.php?success=true');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ADMiN Page</title>
    
</head>
<body>

<div class="sidebar">
    <div class="top">
        <div class="logo">
          
            <span class="CRM">IM Project</span>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <div class="user">
        <div>
            <p class="bold">Christian Bacay</p><br>
            <p class="admin">Admin</p>
        </div>
    </div>
    <ul>
        <li>
            <a href="admin1.php">
            <i class='bx bx-home-alt' ></i>
                <span class="nav-items">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Booking</span>
            </a>
            <span class="tooltip">Booking</span>
        </li>
        <li>
            <a href="#" >
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 2</span>
            </a>
            <span class="tooltip">Module 2</span>
        </li>
        <li>
            <a href="#" >
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 3</span>
            </a>
            <span class="tooltip">Module 3</span>
        </li>
        <li>
            <a href="#" >
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 4</span>
            </a>
            <span class="tooltip">Module 4</span>
        </li>
        <li>
            <a href="#" >
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 5</span>
            </a>
            <span class="tooltip">Module 5</span>
        </li>
        <li>
            <a href="login.php">
                <i class='bx bx-log-out-circle' ></i>
                <span class="nav-items">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>
</div>

<div class="main-content">
    <div class="container" id="content">
        <form method="POST">

        <div class="form-container">
            <div class="form-group">
                <h2>Booking Form</h2><br>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Type your name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="contact">contact</label>
                <input type="contact" class="form-control" id="contact" placeholder="Type your email" name="contact" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="date">date</label>
                <input type="date" class="form-control" id="date" placeholder="Type your phone no" name="date" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="checkin">Checkin</label>
                <input type="time" class="form-control" id="checkin" placeholder="What kind of concern" name="checkin" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="checkout">Checkout</label>
                <input type="time" class="form-control" id="checkout" placeholder="What kind of concern" name="checkout" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="payment">Payment</label>
                <input type="text" class="form-control" id="payment" placeholder="What kind of concern" name="payment" autocomplete="off" required>
            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
</div>
</div>

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');
    let content = document.querySelector('#content');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
                            
    }
    window.onload = function() {
        sidebar.classList.add('active');
    };
</script>

<style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}


.sidebar {
    position: absolute;
    top: 0;
    left: 0;
    height: 100vh;
    width: 80px;
    background-color: #2F1B12;
    padding: 0.4rem 0.8rem;
    transition: all 0.5s ease;
}
.sidebar.active ~ .main-content {
    left: 250px;
    width: calc(100% - 250px);
}
.sidebar.active {
    width: 250px;
}

.sidebar #btn {
    position: absolute;
    color: #deaf84;
    top: .4rem;
    left: 50%;
    font-size: 1.2rem;
    line-height: 50px;
    transform: translateX(-50%);
    cursor: pointer;
}
.sidebar.active #btn {
    left: 90%;
}
.sidebar .top .logo {
    color: #fff;
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    pointer-events: none;
    opacity: 0;
}

.sidebar.active .top .logo {
    opacity: 1;
}

.top .logo i {
    font-size: 2rem;
    margin-right: 10px;

}
.CRM{
    color: #deaf84;

}

.user {
    display: flex;
    align-items: center;
    margin: 1rem;
    margin-left: 2px;
}
.user p {
    color: brown;
    opacity: 1;
    margin-left: 1rem;
}
.user p.admin{
    color: brown;
}
.bold {
    font-weight: 600;

}

.sidebar p {
    opacity: 0;
}

.sidebar.active p {
    opacity: 1;
}

.sidebar ul li {
    position: relative;
    list-style-type: none;
    height: 50px;
    width: 90%;
    margin: 0.8rem auto;
    line-height: 50px;
}

.sidebar ul li a {
    color: #deaf84;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-bottom: 0.8rem solid transparent;
}

.sidebar ul li a:hover {
    background-color: #deaf84;
    color: #2F1B12;
    border-radius: 10px;
    height: 50px;
    animation: hover 0.5s ease;
}


.sidebar ul li a i {
    min-width: 50px;
    text-align: center;
    height: 50px;
    border-radius: 12px;
    line-height: 50px;
}

.sidebar .nav-items {
    opacity: 0;
}

.sidebar.active .nav-items {
    opacity: 1;

}
.sidebar ul li .tooltip {
   position:absolute;
   left: 125px;
   top: 50%;
   transform: translate(-50%, -50%);
   box-shadow: 0 0.5rem 0.8rem rgba(0, 0, 0, 0.2);
   border-radius: .6rem;
   padding: .4rem 1.2rem;
   line-height: 1.8rem;
   z-index: 20;
   opacity: 0;
}

.sidebar ul li:hover .tooltip {
    opacity: 1;
    background-color: #97704F;
    animation: hover 0.5s ease;
}

.sidebar.active ul li .tooltip {
    display: none;
}

.main-content {
    position: relative;
    background-color: #714423;
    min-height: 100vh;
    top: 0;
    left: 80px;
    transition: all 0.5s ease;
    width: calc(100% - 80px);
    padding: 1rem;
}
.container {
    display: flex;
    justify-content: center; /* I-center horizontally */
    align-items: center; /* I-center vertically */
    color: white;
    height: 100vh;

}
.container h1 {
    text-align: center; /* I-center ang text horizontally */
    font-size: 50px;
}

.welcome-box {
    background-color: #12171e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

   /* Add this CSS to your stilo.css file */
   h2{
    color: #2f1b12;
   }

   .form-container {
    width: 500px;
    margin: 0 auto;
    background-color: #97704f; /* Change the background color */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    border: 0px solid; /* Add a border */
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    color: #2f1b12;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #5a9ced;
}

.btn {
    display: inline-block;
    background-color: #5a9ced;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #4a8adf;
}

    </style>


</body>
</html>
