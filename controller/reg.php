<?php
include "../config/config.php";
$username=trim($_POST[username]);
$userpwd=md5($_POST[pwd]);
mysqli_select_db($conn,"study");
$sql="insert into user(username,userpwd) values('".$username."','".$userpwd."')";
$result=mysqli_query($conn,$sql) or die(mysqli_error());
header("Content-Type: text/html; charset=UTF-8");
if($result){
    $res=array(
        'success'=>true,
         'desc'=>"添加成功",
         'data'=>array(
             "username"=>$username
         )
         );
   echo json_encode($res);
}else{
    echo "添加失败";
}
?>