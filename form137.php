<?php
include 'connectsss.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $date=$_POST['date'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $payment=$_POST['payment'];



    $sql="insert into `cruds` (name,contact,date,checkin,checkout,payment)
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <h1>Booking</h1>
        </div>
        <ul>
          <li><a href="adminnoalert.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          <li><a href="form137.php">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Booking</span>
          </a>
          </li>
          <li><a href="viewtable.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">View Table</span>
          </a>
          </li>
          
          <li><a href="login.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>Welcome to Hokkaido Hotel!</p>
      </div>
      <div class="main-body">
      
        <form method="POST">

        <div class="form-container">
            <div class="form-group">
                <h2>Booking Form</h2><br>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Type your name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="contact">contact</label>
                <input type="contact" class="form-control" id="contact" placeholder="Type your contact number" name="contact" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="date">date</label>
                <input type="date" class="form-control" id="date" placeholder="Type your" name="date" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="checkin">Checkin</label>
                <input type="time" class="form-control" id="checkin" placeholder="type your" name="checkin" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="checkout">Checkout</label>
                <input type="time" class="form-control" id="checkout" placeholder="type your" name="checkout" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="payment">Payment</label>
                <input type="text" class="form-control" id="payment" placeholder="Payment" name="payment" autocomplete="off" required>
            </div>
            
            <div class="alert" id="alert-message" style="display: none; color: red;">Please fill up all fields.</div>

            <button type="submit" class="btn btn-primary" name="submit" onclick="validateForm()">Submit</button>
        </form>


        
      
        
      
          </div>
          
        </div>
       
      </div>
    </div>
    </section>
  </div>

</body>
</html></span>

<script>
function validateForm() {
    var name = document.getElementById('name').value;
    var contact = document.getElementById('contact').value;
    var date = document.getElementById('date').value;
    var checkin = document.getElementById('checkin').value;
    var checkout = document.getElementById('checkout').value;
    var payment = document.getElementById('payment').value;

    if (name === "" || contact === "" || date === "" || checkin === "" || checkout === "" || payment === "") {
        document.getElementById('alert-message').style.display = "block";
        return false;
    }
}
</script>



<style>

    .alert{

margin-bottom: 20px;
    }
    .form-container {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.form-group {
  margin-bottom: 20px;
}
.form-group label {
  display: block;
  margin-bottom: 5px;
  color: #333;
  font-weight: bold;
}
.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}
.btn-primary {
  background-color: #4caf50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
.btn-primary:hover {
  background-color: #45a049;
}


    </style>

<style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: rgb(233, 233, 233);
}
.container{
  display: flex;
  width: 1200px;
  margin: auto;
}
nav{
  position: sticky;
  top: 0;
  left: 0;
  bottom: 0;
  width: 280px;
  height: 110vh;
  background: #fff;
}
.navbar{
  width: 80%;
  margin: 0 auto;
}

.logo{
  margin: 2rem 0 1rem 0;
  padding-bottom: 3rem;
  display: flex;
  align-items: center;
}
.logo img{
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.logo h1{
  margin-left: 1rem;
  text-transform: uppercase;
}

ul{
  margin: 0 auto;
}
li{
  padding-bottom: 2rem;
}
li a{
  font-size: 16px;
  color: rgb(85, 83, 83);

}
nav i{
  width: 50px;
  font-size: 18px;
  text-align: center;
}

.logout{
  position: absolute;
  bottom: 20px;
}

/* Main Section */
.main{
  width: 100%;
}
.main-top{
  width: 100%;
  background: #fff;
  padding: 10px;
  text-align: center;
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgb(43, 43, 43);
}
.main-body{
  padding: 10px 10px 10px 20px;
}
h1{
  margin: 20px 10px;
}
.search_bar{
  display: flex;
  padding: 10px;
  justify-content: space-between;
}
.search_bar input{
  width: 50%;
  padding: 10px;
  border: 1px solid rgb(190, 190, 190);
}
.search_bar input:focus{
  border: 1px solid blueviolet;
}
.search_bar select{
  border: 1px solid rgb(190, 190, 190);
  padding: 10px;
  margin-left: 2rem;
}
.search_bar .filter{
  width: 300px;
}

.tags_bar{
  width: 55%;
  display: flex;
  padding: 10px;
  justify-content: space-between;
}
.tag{
  background: #fff;
  padding: 10px 15px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  font-size: 13px;
  cursor: pointer;
}
.tag i{
  margin-right: 0.7rem;
}
.row{
  display: flex;
  padding: 10px;
  margin-top: 1.3rem;
  justify-content: space-between;
}
.row p{
  color: rgb(54, 54, 54);
  font-size: 15px;
}
.row p span{
  color: blueviolet;
}
.job_card{
  width: 100%;
  padding: 15px;
  cursor: pointer;
  display: flex;
  border-radius: 10px;
  background: #fff;
  margin-bottom: 15px;
  justify-content: space-between;
  border: 2px solid rgb(190, 190, 190);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}
.job_details{
  display: flex;
}
.job_details .img{
  display: flex;
  justify-content: center;
  align-items: center;
}
.job_details .img i{
  width: 70px;
  font-size: 3rem;
  margin-left: 1rem;
  padding: 10px;
  color: rgb(82, 22, 138);
  background: rgb(216, 205, 226);
}
.job_details .text{
  margin-left: 2.3rem;
}
.job_details .text span{
  color: rgb(116, 112, 112);
}
.job_salary{
  text-align: right;
  color: rgb(54, 54, 54);
}
.job_card:active{
  border: 2px solid blueviolet;
  transition: 0.4s;
}
</style>
    





</body>
</html>