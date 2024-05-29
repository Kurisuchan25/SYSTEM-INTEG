<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ADMiN Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            text-align:center;
            color: #2f1b12;
            font-weight: bold;

        }
        .tite {
            margin-top: 20px;
            width: 100%;
            font-size: 15px;
            text-align: center;
            color: #2f1b12;
            font-weight: bold;
        }

        .boxes {
            background-color: #97704f;
            height: 550px;
            width: 70%;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
            margin: 0 auto; /* Center the container horizontally */
            border-radius: 20px;


        }

        .btn {
            background-color: #deaf84;
            color: #2f1b12;
            transition: background-color 0.3s, color 0.3s; /* Add transition for smooth effect */
        }

        .btn:hover {
            background-color: #2f1b12; /* Change background color on hover */
            color: #deaf84; /* Change text color on hover */
        }





        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 135vh;
            width: 80px;
            background-color: #2f1b12;
            padding: 0.4rem 0.8rem;
            transition: all 0.5s ease;
            overflow-y: auto;
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

        .CRM {
            animation: worm 4s infinite;
            color: #deaf84;

        }
        @keyframes worm {
            0%, 100% {
                transform: translateX(0px);
            }
            25% {
                transform: translateX(15px);
            }
            50% {
                transform: translateX(15px);
            }
            75% {
                transform: translateX(15px);
            }
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
            color: #2f1b12;
            border-radius: 10px;
            height: 50px;
            animation: hover 0.5s ease;
        }
        @keyframes hover {
            0% { transform: scale(1); }
            10% { transform: scale(1.2); }
            60% { transform: scale(1); }
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
            background-color: white;
            animation: hover 0.5s ease;
        }

        .sidebar.active ul li .tooltip {
            display: none;
        }

        .main-content {
            position: relative;
            background-color: #664229;
            min-height: 110vh;
            top: 0;
            left: 80px;
            transition: all 0.5s ease;
            width: calc(100% - 80px);
            padding: 1rem;
            color: white;
            justify-content: center;
            align-items: center;

        }
        .container {
            display: flex;
            justify-content: space-between;
            color: white;
            font-size: 12px;
            height: 90.2vh;
        }
        .container{
            padding-right: calc(10% - 30px);
        }
        .welcome-box {
            background-color: #12171e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        main.row{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 20px;
        }
        .col header.title{
            font-family: Helvetica;
            color: white;
            padding: 0px 0px 20px 30px;
        }
        .col .contents{
            padding: 0px 30px;
            border-left: 2px solid yellowgreen;
        }
        .col .contents .box{
            position: relative;
            padding: 20px;
            background: #12171e5f;
            cursor: pointer;
            transition: all 0.4s;
            margin-bottom: 20px;
            border-radius: 5px;
            padding-left: 50px;
        }

        .col .contents .box:hover{
            box-shadow: 0px 3px 12px 0px #12171e;
            border: 1px solid transparent;
        }
        .col .contents .box::before{
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            right: calc(100% + 22px);
            top: 0;
            background-color: yellowgreen;
            border: 2px solid white;

        }
        .title h2{
            color: white;
            letter-spacing: 3px;
            display: flex;
            list-style: none;
            gap: 8rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 300;
            font-size: 14px;
            color: #fff;
            margin-bottom: 20px;
            margin-top: 20px;

        }
        .box h4{
            position: relative;
            color: yellowgreen;
            font-size: 17px;
            margin-bottom: 20px;
            font-weight: 300;


        }


        .box p{
            line-height: 1.2;
            color: white;
            font-size: 12px;
            font-family: 'Bahnschrift Light', sans-serif;


        }
        @media(max-width: 768px){
            main.row{
                grid-template-columns: 1fr;
            }
            .row .col:nth-child(2){
                margin-top: 30px;
            }

        }
        .header-container {
            background: #12171e5f;
            padding: 15px; /* Add padding para magkaroon ng space mula sa border */
            width: 900px;
            display: flex;
            padding-right: calc(10% - 30px);
            align-items: center;
            justify-content: center;
            margin: 0 auto; /* Center horizontally */
            height: 166px;
            border-radius: 10px;
            color: white;
            margin-bottom: 50px;
            margin-top: 20px;
            letter-spacing: 5px;
            font-weight: 300;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .proceed-button {
            margin-top: 20px; /* Magdagdag ng pampalubag-loob sa pagitan ng laman at proceed button */
            text-align: right; /* I-set ang text alignment sa kanan */
        }

        .proceed {
            background-color: darkgreen; /* Kulay ng button */
            color: white; /* Kulay ng text */
            padding: 10px 20px; /* Lapad at taas ng button */
            border-radius: 5px; /* Radius ng mga gilid */
            cursor: pointer; /* Magpakita ng pointer kapag nag hover */
            border: solid gray 2px;
            transition: background-color 0.3s; /* Epekto ng transition kapag nag hover */
        }


        .proceed:hover {
            background-color: yellowgreen; /* Kulay ng button kapag nag hover */
        }
    </style>
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
                <i class='bx bxs-grid-alt' ></i>
                <span class="nav-items">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Booking</span>
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
            <a href="login.php">
                <i class='bx bx-log-out-circle' ></i>
                <span class="nav-items">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>
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

</body>
</html>

