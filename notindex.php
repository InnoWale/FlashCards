<?php
    include("database.php");

    $sql = "SELECT * FROM users WHERE username = 'Ekko' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_assoc($result);
        echo $rows["password"] . "<br>";
    }
    else{
        echo"Could not find username";
    }

    mysqli_close($conn)
?>