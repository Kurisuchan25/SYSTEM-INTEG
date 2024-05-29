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
   /* Add this CSS to your stilo.css file */
.form-container {
    max-width: 500px;
    margin: 0 auto;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
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
