<?php session_start();

// ��������� ����� � �����
if(isset($_POST['comm'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fifth_gear"; // ������ �� ����� ���� ���� �����
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // �������� �'�������
    if ($conn->connect_error) {
        die("������� �'������� � ����� �����: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $name = $_POST['user_id'];
    $text = $_POST['text'];
    $news = $_POST['news_id'];
    // SQL ����� ��� ������� ��������� �� ���� �����
    $sql = "INSERT INTO reviews (email, name, text, news, date) VALUES ('$email', '$name', '$text', '$news', NOW())";
    $res = mysqli_query($conn, $sql);

    Header("Location: News_detail.html?id=$news");  

}

// �������� �'������� � ����� �����
mysqli_close($conn);
?>