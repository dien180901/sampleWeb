<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);

    if (fopen('../php/install.php', 'r') != null) {
        exit("'install.php' still exists! Delete it to proceed!");
    } 
    // echo '<h2>$_SESSION values</h2>';
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';
    // echo '<hr>';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MALL EXPRESS CMS</title>
        <style>
            html body{
                margin: 0px;
                padding: 0px;
                width: 100%;
                height:100%;
                background-image: url("https://i.imgur.com/2PlstbA.png");
                background-repeat: none;
            }

            .cms-main-title {
                text-align: center;
                font-size: 3.5rem;
                color: white;
                background: rgb(0,0,0);
                background: linear-gradient(90deg, rgba(0,0,0,1) 20%, rgba(37,51,170,1) 72%, rgba(0,255,229,1) 100%);    
                height: 275px;
                margin-top: -50px;
                padding-top: 70px;
                overflow: hidden;
            }

            #welcome {
                color: rgb(247, 60, 60);
            }

            #admin-name {
                font-size: 2rem;
            }


            .vertical-center-1 > button {
                height: 50px;
                font-size: 18px;
                border-radius: 10px;
                background-color: rgb(247, 60, 60);
                color: #fff;
                padding: 10px;
                margin: 15px;
            }

            .vertical-center-1 .button2 {
                padding: 0 14px 0 14px;
            }

            .vertical-center-1 > button > a {
                text-decoration: none;
                color: inherit;
            }

            .vertical-center-1 > button:hover {
                font-size: 18px;
                border-radius: 10px;
                background-color: #000;
                color: #fff;
            }

            .banner {
                text-align: center;
                border: 10px red double;
                padding-top: 170px;
                padding-bottom: 170px;
                padding-left: 0;
                background-image: url("https://i.imgur.com/2PlstbA.png");
                background-repeat: none;
            } 
        </style>
    </head>

    <body>
        <header>
            <div class="cms-main-title">
                <p><strong id="welcome">WELCOME TO THE MALL EXPRESS CMS</strong> <br> <span id="admin-name">Admin: <?= $_SESSION['admin_username']?><span></p>   
            </div>
        </header>

        <div class="banner">
            <div class="vertical-center-1">
                <button class="button1">
                <a href="Term_Of_Services_CMS.php">Change Term of Services Content</a>
                </button><br>

                <button class="button2">
                <a href="Privacy_Policies_CMS.php">Change Privacy Policies Content</a>
                </button><br>

            </div>
        </div>
    </body>
</html>