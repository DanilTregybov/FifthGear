<?php session_start();
// ϳ��������� �� ���� �����
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


    $user = $_POST['user_id'];
    $text = $_POST['text'];
    $testdrive_id = $_POST['testdrive_id'];
    // SQL ����� ��� ������� ��������� �� ���� �����
    $sql = "INSERT INTO test_reviews (user, text, testdrive, public_date) VALUES ( '$user', '$text', '$testdrive_id', NOW())";
    $res = mysqli_query($conn, $sql);

    Header("Location: Testdrive_detail.html?id=$testdrive_id");

}

// �������� �'������� � ����� �����
mysqli_close($conn);
?>