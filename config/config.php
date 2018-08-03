<?php
header("Content-type:text/html;charset=utf-8");
$username=$_POST["username"];
$userpwd=$_POST["pwd"];
define("HOST","localhost");
define("HOSTNAME","root");
define("HOSTPWD","root");
define("DB","study");
$conn = mysqli_connect(HOST,HOSTNAME,HOSTPWD) or die("Error-数据库连接失败！");
mysqli_set_charset($conn,"utf8");
//$sql="insert into user(username,userpwd) values ('".$username."','".$userpwd."')";
// $sql="CREATE DATABASE PHP";
// $res=mysqli_query($conn,$sql);
// if($res){
//     echo "添加成功".$res;
// }else{
//     echo "添加失败!".$res;
// }
// mysqli_close($conn);

?>