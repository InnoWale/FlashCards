<?php
    include("database.php")
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Make Flashcards</title>
        <link rel="stylesheet" href="Make_flashcards.css">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&family=Roboto&family=Tsukimi+Rounded&display=swap" rel="stylesheet">
    </head>

    <body>
        <div id="top-line"></div>
        <div id="box">
            <H1> Create your cards</H1>
            <form action=" <?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div>
                    <div class="label">
                        <label for="question">QUESTION:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="question" placeholder="" name="question">
                    </div>
                </div>

                <div>
                    <div class="label">
                        <label for="answer">ANSWER:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="answer" placeholder="" name="answer">
                    </div>
                </div>

                <div id="submitform">
                    <input type="submit" value="SAVE" style="height: 60px;
    width: 120px;
    color: antiquewhite;
    font-size: 1.2em;
    font-family: Tsukimi Rounded, serif;
    font-weight: 400;
    font-style: normal;
    background-color: hsl(175, 56%, 54%);
    border: none;
    outline: none;
    border-radius: 15px;
    transform: scale(1);
    transition: 0.5s;
    text-align: center">
                </div>
                
            </form>
            <div>
                <a href="Home.php">
                    <button>HOME</button>
                </a>
            </div>
        </div>
    </body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $question = $_POST["question"];
        $answer = $_POST["answer"];

        $sql = "INSERT INTO quizes(question, answer)
                VALUES ('$question', '$answer')";

        mysqli_query($conn, $sql);
        echo"Saved to database";

    }
?>