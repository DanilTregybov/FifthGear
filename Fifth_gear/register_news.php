<!--<?php session_start(); // Ініціалізуємо механізм сесій

if(isset($_POST['reg'])) {
    // Підключаємося до бази даних
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fifth_gear";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Перевірка з'єднання
	if ($conn->connect_error) {
		die("Помилка з'єднання: " . $conn->connect_error);
	}

    // Отримуємо дані з форми реєстрації
    $login = $_POST['login'];
    $email = $_POST['email'];
    $passwrd1 = $_POST['pass'];
    $passwrd2 = $_POST['conf_pass'];

    $pattern1  = "/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i";
    $pattern2 = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/";

    if (empty($email) || empty($passwrd1)) {
        echo "Email або Password не заповнені!";
    } elseif (!preg_match($pattern1, $email) || !preg_match($pattern2, $passwrd1)) {
        echo "Email або Password заповнені неправильно!";
    } elseif ($passwrd1 != $passwrd2) {
        echo "Паролі не однакові!";
    } else {
        // Підготовка та виконання запиту на додавання нового користувача до бази даних
        $query = "INSERT INTO users (name, email, pass) VALUES ('$login', '$email', '$passwrd1')";
        $res = $conn->query($query);

        // Закриваємо з'єднання з базою даних
        $conn->close();

        // Перенаправляємо на сторінку входу після успішної реєстрації
        Header("Location: New_Login.html");
        exit();
    }
}
?>-->
<?php session_start(); // Ініціалізуємо механізм сесій

if(isset($_POST['reg'])) {
    // Підключаємося до бази даних
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fifth_gear";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Перевірка з'єднання
	if ($conn->connect_error) {
		die("Помилка з'єднання: " . $conn->connect_error);
	}

    // Отримуємо дані з форми реєстрації
    $login = $_POST['login'];
    $email = $_POST['email'];
    $passwrd1 = $_POST['pass'];
    $passwrd2 = $_POST['conf_pass'];

    // Підготовка та виконання запиту на додавання нового користувача до бази даних
    $query = "INSERT INTO users (name, email, pass) VALUES ('$login', '$email', '$passwrd1')";
    $res = $conn->query($query);

    // Закриваємо з'єднання з базою даних
    $conn->close();

    // Перенаправляємо на сторінку входу після успішної реєстрації
    Header("Location: New_Login.html");
    exit();
}
?>
