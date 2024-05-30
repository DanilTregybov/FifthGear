<?php session_start();
if(!isset($_POST['ok'])) {// якщщо форма не заповнена то виводимо її
 include ("New_Login.html");
}
else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fifth_gear";
$conn = new mysqli($servername, $username, $password, $dbname);
// Перевірка з'єднання
if ($conn->connect_error) {
	die("Помилка з'єднання: " . $conn->connect_error);
}
$res=$conn->query("SELECT * FROM users WHERE name='".$_POST['login']."' AND pass='".$_POST['pass']."'");
if ($res->num_rows != 1)  {
    include ("New_Login.html");
    echo "<script> alert('Невірні логін або пароль'); </script>";
}
else {
    $_SESSION['login']=$_POST['login']; //встановлюєм login & pass
    $_SESSION['pass']=$_POST['pass'];
Header("Location: Home_page.html");
}
$conn->close();
}
?>
