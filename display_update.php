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
            <a href="admin1.php">
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

</div>
<h1> Concern Record List </h1>

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
                          updateid='.$id.'" style="color: white;text-decoration: none;">Update</a></button>
                          <button  class="btn-delete"><a href="delete.php? 
                          deleteid='.$id.'"style="color: white;text-decoration: none;">Delete</a></button>
                          <button  class="btn-view"><a href="view.php? 
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

<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Update successfully!</p>
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

    // Get the modals
var successModal = document.getElementById("successModal");

// Get the close buttons
var closeBtns = document.querySelectorAll(".close");

// When the user clicks the close button, close the modal
closeBtns.forEach(function(btn) {
    btn.onclick = function() {
        successModal.style.display = "none";
    }
});

// Display success modal after form submission
<?php if(isset($_GET['success']) && $_GET['success'] === "true"): ?>
    successModal.style.display = "block";
<?php endif; ?>


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
            margin-top: -40px;
            display: flex;
    flex-direction: column; /* Baguhin ang pagkaka-ayos ng mga elemento sa column */
    align-items: center; /* I-center ang mga elemento sa center */

            
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
            background-color:#12171e3e;
            font-size: 10px;


            
        }
        .table th {
            background-color: #12171e8c;
            padding: 10px;
            border: 1px solid black;
            color: white;
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
            background-color: darkblue;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: solid white 2px;
            border-radius: 5px;
            display: inline-block;
            margin: 5px;

        }
        .btn-delete {
            background-color: darkred;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: solid white 2px;
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
        /* Modal styles */


        /* Modal styles */
/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    animation: modal-pop 0.3s ease; /* Add animation property */
}

.modal-content {
    background-color: #12171e;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
    height: 10%;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Updated box shadow */    color: white;
    text-align: center;
    animation: modal-content-pop 0.3s ease; /* Add animation property */
}
.modal p{
     
    margin-top: 6px;
}

/* Keyframes for modal pop-up animation */
@keyframes modal-pop {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes modal-content-pop {
    from {
        transform: scale(0.5);
    }
    to {
        transform: scale(1);
    }
}

/* Close button style */
.close {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
    transition: color 0.3s ease;
}

.close:hover,
.close:focus {
    color: white;
    text-decoration: none;
    cursor: pointer;
   text-shadow: 0 8px 16px red;
}

/* Success message style */
.success-message {
    text-align: center;
    color: #4CAF50;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.success-icon {
    color: #4CAF50;
    font-size: 48px;
    margin-bottom: 20px;
}
.button-container {
    margin-bottom: 20px; /* Magdagdag ng espasyo sa pagitan ng button at table */
}

.table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}
.btn{
    background-color: #12171e;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: solid white 2px;
            border-radius: 5px;
            display: inline-block;
            margin: 5px;

}
.btn-view{
    background-color: #12171e;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: solid white 2px;
            border-radius: 5px;
            display: inline-block;
            margin: 5px;
}
h1{    
 color: white;
        }



</style>






</body>
</html>
