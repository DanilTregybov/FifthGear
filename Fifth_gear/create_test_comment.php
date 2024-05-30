<?php session_start();
// Підключення до бази даних
// Отримання даних з форми
if(isset($_POST['comm'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fifth_gear"; // Замініть на назву вашої бази даних
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Перевірка з'єднання
    if ($conn->connect_error) {
        die("Помилка з'єднання з базою даних: " . $conn->connect_error);
    }


    $user = $_POST['user_id'];
    $text = $_POST['text'];
    $testdrive_id = $_POST['testdrive_id'];
    // SQL запит для вставки коментаря до бази даних
    $sql = "INSERT INTO test_reviews (user, text, testdrive, public_date) VALUES ( '$user', '$text', '$testdrive_id', NOW())";
    $res = mysqli_query($conn, $sql);

    Header("Location: Testdrive_detail.html?id=$testdrive_id");

}

// Закриття з'єднання з базою даних
mysqli_close($conn);
?>