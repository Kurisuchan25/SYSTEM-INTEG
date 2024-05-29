<?php
include 'connectsss.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
          <li><a href="#">
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
      <h1> Concern Record List </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Date</th>
                    <th scope="col">Check in</th>
                    <th scope="col">Check out</th>
                    <th scope="col">Payment</th>

                </tr>
            </thead>
            
            <tbody>

            <?php
                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);
                if($result) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $contact = $row['contact'];
                        $date = $row['date'];
                        $checkin = $row['checkin'];
                        $checkout = $row['checkout'];
                        $payment = $row['payment'];


                        echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $contact . '</td>
                            <td>' . $date . '</td>
                            <td>' . $checkin . '</td>
                            <td>' . $checkout . '</td>
                            <td>' . $payment . '</td>


                            
                            
                            <td>
                          <button class="btn-update"><a href="updating.php?
                          updateid='.$id.'" style="color: white;text-decoration: none;">Update</a></button>
                          <button  class="btn-delete"><a href="delete.php? 
                          deleteid='.$id.'"style="color: white;text-decoration: none;">Delete</a></button>
                          <button  class="btn-view"><a href="views.php? 
                          viewid='.$id.'"style="color: white;text-decoration: none;">View</a></button>
            </td>
                        </tr>';
                    }
                }
                ?>

</tbody>
</table>
      


        
      
        
      
          </div>
          
        </div>
       
      </div>
    </div>
    </section>
  </div>

</body>
</html></span>






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
.name{
    font-size: 60px;
  margin: 20px 10px;
  text-align: center;
  margin-top: 25%;
}
.table {
      width: 100%;
      border-collapse: collapse;
    }
    .table th,
    .table td {
      padding: 8px;
      border: 1px solid #ddd;
      text-align: left;
    }
    .table th {
      background-color: #f2f2f2;
      color: #333;
      font-weight: bold;
    }
    .table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .table tbody tr:hover {
      background-color: #ddd;
    }
    .table td button {
      padding: 5px 10px;
      border: none;
      cursor: pointer;
      background-color: #007bff;
      color: #fff;
      border-radius: 4px;
    }
    .table td button a {
      color: #fff;
      text-decoration: none;
    }
</style>
    





</body>
</html>