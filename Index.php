<?php
    include("database.php");
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wdth,wght@82.2,334&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&family=Roboto&family=Tsukimi+Rounded&display=swap" rel="stylesheet">

    </head>

    <body>
        <header>
            <div id="top-line"></div>
            <div id="sign_in_name">
                <p>Signed in as</p>
                <p id="Username"></p>
            </div>
            <div>
                <h1>HOME</h1>
            </div>
        </header>

        <div>
            <a href="Flashcard.php">
                <button>Flashcards</button>
            </a>
        </div>

        <div>
            <a href="Make_flashcards.php">
                <button> Make flashcards</button>
            </a>
        </div>


        <style>
            body{
                margin: 0px;
            }

            #top-line{
                height: 10px;
                width: 100%;
                background-color: hsl(180, 86%, 45%);
            }

            div{
                text-align: center;
            }

            #sign_in_name{
                margin-right: 10px;
                text-align: end;
                font-weight: bold;
            }
            h1{
                margin-top: 170px;
                font-family: "Noto Sans", serif;
                font-weight: bold;
                font-variation-settings:"wdth" 100;
            }

            button{
                height: 60px;
                width: 120px;
                text-align: center;
                margin: 20px;
                background-color: hsl(175, 56%, 54%);
                color: white;
                font-size: 1.2em;
                outline: none;
                border: none;
                border-radius: 15px;
                font-family: "Tsukimi Rounded", serif;
                transform: scale(1);
                transition: 0.5s;
            }

            button:hover{
                background-color: hsl(174, 48%, 35%);
                transform: scale(1.06);
                transition-duration: 0.5s;
            }

        </style>


        <script>
            var username = '<?php echo $username?>';
            Client = document.getElementById("Username");
            Client.textContent = username;
        </script>
    </body>
</html>


