<?php session_start();

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

    $email = $_POST['email'];
    $name = $_POST['user_id'];
    $text = $_POST['text'];
    $news = $_POST['news_id'];
    // SQL запит для вставки коментаря до бази даних
    $sql = "INSERT INTO reviews (email, name, text, news, date) VALUES ('$email', '$name', '$text', '$news', NOW())";
    $res = mysqli_query($conn, $sql);

    Header("Location: News_detail.html?id=$news");  

}

// Закриття з'єднання з базою даних
mysqli_close($conn);
?>