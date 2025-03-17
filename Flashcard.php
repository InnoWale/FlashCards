<?php
    include("database.php");
    session_start();


?>

<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = 'SELECT MAX(Id) AS max_id FROM quizes';

        $max_id_row = mysqli_query($conn, $sql);

        if(mysqli_num_rows($max_id_row) >0){
            $rows = mysqli_fetch_assoc($max_id_row);
            $max_id = $rows["max_id"];

            $rand_num = rand(18, $max_id);
            $sqli = "SELECT * FROM quizes where Id = '$rand_num'";

            $table = mysqli_query($conn, $sqli);

            if(mysqli_num_rows($table) > 0 ){
                $array = mysqli_fetch_assoc($table);
                $question = $array["question"];
                $answer = $array["answer"];

                json_encode($question);
                json_encode($answer);
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>  
        <title>Flashcard</title>
        <link rel="stylesheet" href="Flashcard.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&family=Roboto&family=Tsukimi+Rounded&display=swap" rel="stylesheet">
    </head>

    <header>
        <div id="top-line"></div>
        <div>
            <span>
                <p class="left-text">Dr Retell: B7 Revision</p>
                <p class="left-text">Quiz By Retell</p>
            </span>
        </div>
    </header>

    <div id="shadow-box">
        <p id="border">KEEP GOING</p>
    </div>

    <div id="Outerbox">
        <div id="Borderbox">
            <div id="question">
                <p id="p-text">Question</p>
            </div>
            <div id="answer">
                <p id="p-text">Answer</p>
            </div>
        </div>
    </div>
    <div class="button">
        <form action='<?php htmlspecialchars($_SERVER["PHP_SELF"])?>' method="post">
            <input type="submit" name="change_button" value="NEXT" id = "next"style= "height: 60px;
    width: 120px;
    text-align: center;
    margin: 20px;
    background-color: hsl(175, 56%, 54%);
    color: white;
    font-size: 1.2em;
    outline: none;
    border: none;
    border-radius: 15px;
    font-family: Tsukimi Rounded, serif;
    transform: scale(1);
    transition: 0.5s;
    text-align: center;
">
        </form>

        <a href="Home.php">
                    <button>HOME</button>
        </a>
    </div>

    <script>

        var questionphp = '<?php echo $question ?>';
        var answerphp = '<?php echo $answer ?>';

        var questionid = document.getElementById("question");
        var answerid = document.getElementById("answer");

        questionid.textContent = questionphp;
        answerid.textContent = answerphp;
    </script>
</html>  

