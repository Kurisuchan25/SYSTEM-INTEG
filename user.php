<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ADMiN Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
    <div class="top">
        <div class="logo">
            <i class='bx bxl-codepen' ></i>
            <span>Welcome to User</span>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <div class="user">
        <img src="jake.jpg" alt="me" class="jake">
        <div>
            <p class="bold">Unknown User</p><br>
            <p class="admin">User</p>
        </div>
    </div>
    <ul>
        <li>
            <a href="#" onclick="showDashboard()">
                <i class='bx bxs-grid-alt' ></i>
                <span class="nav-items">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="#" onclick="showModule('Module 1')">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 1</span>
            </a>
            <span class="tooltip">Module 1</span>
        </li>
        <li>
            <a href="#" onclick="showModule('Module 2')">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 2</span>
            </a>
            <span class="tooltip">Module 2</span>
        </li>
        <li>
            <a href="#" onclick="showModule('Module 3')">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 3</span>
            </a>
            <span class="tooltip">Module 3</span>
        </li>
        <li>
            <a href="#" onclick="showModule('Module 4')">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Module 4</span>
            </a>
            <span class="tooltip">Module 4</span>
        </li>
        <li>
            <a href="#" onclick="showModule('Module 5')">
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
        <h1>Welcome To The User Page</h1>
    </div>
</div>

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');
    let content = document.querySelector('#content');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    }

    function showDashboard() {
        content.innerHTML = "<h1>Dashboard Content Here</h1>";
                            
    }

    function showModule(moduleName) {
        let moduleContent = getModuleContent(moduleName);
        content.innerHTML = moduleContent;
    }

    function getModuleContent(moduleName) {
        // You can define the content for each module here
        switch (moduleName) {
            case 'Module 1':
                return "<h1>Module 1 Content Here</h1>";
            case 'Module 2':
                return "<h1>Module 2 Content Here</h1>";
            case 'Module 3':
                return "<h1>Module 3 Content Here</h1>";
            case 'Module 4':
                return "<h1>Module 4 Content Here</h1>";
            case 'Module 5':
                return "<h1>Module 5 Content Here</h1>";
            default:
                return "<h1>No content available for this module</h1>";
        }
    }
    window.onload = function() {
        sidebar.classList.add('active');
    };
</script>

</body>
</html>
