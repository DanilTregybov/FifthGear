<? session_start();

//инициализирум механизм сесссий

//начинаем проверку логина и пароля

$db=mysql_connect('localhost', 'root', '');

mysql_select_db('for_autorizacii', $db);

$res=mysql_query("SELECT * FROM users WHERE login='".$_SESSION['login']."'
AND pass='".$_SESSION['pass']."'", $db);

if (mysql_num_rows($res)!=1) { //такого пользователя нет
Header ("Location: login.php"); //перенаправляем на login.php
}
else{ //пользователь найден, можем выводить все что нам надо
echo "Текст зачиненої сторінки<br><a href='logout.php'>Вихід</a>";
}
mysql_close();
?>