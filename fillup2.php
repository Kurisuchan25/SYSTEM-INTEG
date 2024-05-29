<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ADMiN Page</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>

<div class="sidebar">
    <div class="top">
        <div class="logo">
            <i class='bx bxl-codepen' ></i>
            <span class="CRM">CRM System</span>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <div class="user">
        <img src="jake.jpg" alt="me" class="jake">
        <div>
            <p class="bold">Amiel Jake Baril</p><br>
            <p class="admin">Admin</p>
        </div>
    </div>
    <ul>
        <li>
            <a href="#">
            <i class='bx bx-home-alt' ></i>
                <span class="nav-items">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="module1.php">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Concerns</span>
            </a>
            <span class="tooltip">Concerns</span>
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
    <div class="button-container">
            <button class="adduser"><a href="users.php" style="color: white; text-decoration: none;">Add User</a></button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Concern</th>
                    <th scope="col">Operation</th>
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
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $concern = $row['concern'];
                        echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $concern . '</td>
                            
                            
                            <td>
                          <button class="btn-update"><a href="update.php?
                          updateid='.$id.'" >Update</a></button>
                          <button  class="btn-delete"><a href="delete.php? 
                          deleteid='.$id.'"style="color: white;text-decoration: none;">Delete</a></button>
            </td>
                        </tr>';
                    }
                }
                ?>

</tbody>
</table>
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


.main-content {
    background-color: gray; /* Kulay ng background */
    padding: 20px; /* Espasyo sa paligid */
    justify-content: center;
    align-items: center;
    display: flex;
    letter-spacing: 1px;
            font-weight: 300;
            font-size: 14px;

}
.container {
            text-align: center;
            color: black;
        }
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .table td {
            padding: 10px;
            border: 1px solid black;
            color: white;

            
        }
        .table th {
            background-color: gray;
            padding: 10px;
            border: 1px solid black;
        }
.btn {
            background-color: blue;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            
        }
        .btn-update{
            background-color: blue;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            display: inline-block;
            margin: 5px;

        }
        .btn-delete {
            background-color: red;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            display: inline-block;
            margin: 5px;
        }
        .btn:hover {
            background-color: darkblue;
        }
        .btn-update:hover{
            background-color: darkblue;

        } 
        .btn-delete:hover {
            background-color: darkred;
        }
        .adduser {
          display: block; /* Ensures margin works */
          margin: 0 auto; /* Centers horizontally */
            /* Your button styles */
          background-color: blue;
          border-radius: 5px;
          text-decoration: none;
          border: none;
}


</style>






</body>
</html>
