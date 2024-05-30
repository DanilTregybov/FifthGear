<?php
session_start();
session_destroy();
Header ("Location: Home_page.html");
?>