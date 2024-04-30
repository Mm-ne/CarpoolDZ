<?php
    session_start();
    

    if (isset($_SESSION["passenger_id"])){

        $mysqli = require __DIR__ ."/database.php";

        $sql = "SELECT * FROM passenger
                WHERE passengerID = {$_SESSION["passenger_id"]}
        ";

        $result = $mysqli->query($sql);
        
        $user = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">    
    <link href="./style/profile.css" rel="stylesheet" />
   
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    
    <title>My Profile</title>
</head>
<body>

    <header>
        <nav>
            <div>
                <a href="../index.html">
                    <h1>CarpoolDZ</h1>
                </a>

            </div>

            <div class="menu-container">

                <div>
                    <a href="./pages/Register.html">
                        <i style="text-decoration: none !important;" class="fa-solid fa-circle-user icon-home"></i>
                    </a>
                </div>

                <img src="../../img/icons/angle-small-down.png"  class="dropbtn" id="arrow">

                <div class="dropdown-menu" id="myDropdown">
                    <ul class="dropdown-menu-list">
                        <li class="signup" id="signup">Sign Up</li>
                        <li>Log In</li>
                        <li>About Us</li>
                        <li>Search</li>
                    </ul>
                </div>
                
            </div>
  
        </nav>
    </header>

    <div class="hero-div">
        <img class="img" src="../../img/hero-img.jpg" />
    </div>

    <section>
        <div class="profile-grid">
            <h2 class="h2">My Profile</h2><br>
            <div class="titles">
            <p class="title-sm">Rating:</p>
            <p class="title-sm">Experience:</p>
            <p class="title-sm">Driving category:</p>
            <p class="title-sm">Cancels / Delays:</p>
            <p class="title-sm">Contact:</p>
            <p class="title-sm">Certified:</p>
        </div>
        <div class="exp-values">
            <p class="stars">⭐⭐⭐⭐</p>
            <p class="exp">7 years</p>
            <p class="exp">Used to</p>
            <p class="exp">2 / 10</p>
            <p class="exp">0655882566</p>
            <p class="cert">Yes</p>
        </div>
    </div>
    


        <div class="right-side">
            <h2>My journeys</h2>
            <button class="newjourbtn">
                <a href="./Addjourney.html">
                    New Journey
                </a>
            </button>

            <div class="table-info">
                <div class="row">
                    <p>2/2/23</p>
                    <p>8h</p>
                    <p>Annaba/Setif</p>

                    <button>
                        <a href="./Manage.html">
                            Manage
                        </a>
                    </button>
                </div>
                <div class="row">
                    <p>2/2/23</p>
                    <p>8h</p>
                    <p>Annaba/Setif</p>

                    <button>
                        <a href="#">
                            Manage
                        </a>
                    </button>
                </div>
                <div class="row">
                    <p>2/2/23</p>
                    <p>8h</p>
                    <p>Annaba/Setif</p>

                    <button>
                        <a href="#">
                            Manage
                        </a>
                    </button>
                </div>
            </div>
        
        </div>
    </section>
    <scrip src="../script.js"></scrip>
</body>
</html>