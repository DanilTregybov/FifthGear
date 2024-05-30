<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fifth_gear";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Перевірка з'єднання
    if ($conn->connect_error) {
        die("Помилка з'єднання: " . $conn->connect_error);
    }
    $zapros="DELETE FROM test_reviews WHERE id=".$_GET['rew_id'];
    $conn->query($zapros);
    header('Location: Testdrive_detail.html?id='.$_GET['testdrives_id']);

?>