<?php
header("Content-type:text/html;charset=utf-8");
define("HOST","localhost");
define("HOSTNAME","root");
define("HOSTPWD","root");
define("DB","study");
$conn = mysqli_connect(HOST,HOSTNAME,HOSTPWD) or die("Error-数据库连接失败！");
mysqli_set_charset($conn,"utf8");
?>