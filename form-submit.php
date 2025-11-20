<?php
    // var_dump($_REQUEST);
    // var_dump($_GET);
    // var_dump($_POST);
   

    if(isset($_POST['first_name']) && $_POST['first_name'] != "") {
        echo "<p>{$_POST['first_name']}</p>";
    } else {
         echo "<p>FIRST NAME IS REQUIRED</p>";
    }
?>