<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="author" content="姓名-学号">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> Document</title>
</head>
<body>
   <form action="" method="post">
      <input type="radio" name = "性别" value = "男"> 男
      <br>
      <input type="radio" name = "性别" value = "女"> 女
      <br>
      <input type="submit" name = "提交">
   </form>
</body>
</html>


<?php
/*
$r =rand(0,255);
$g =rand(0,255);
$b =rand(0,255);

$color [8];
for($i = 1 ; $i<=10 ;$i++)
{
   $r =($r+10)%255;
   $g =($g+10)%255;
   $b =($b+10)%255;
   $color[$i] = "rgb($r,$g,$b)";
   echo $color[$i]; 
}
*/

var_dump($_POST);


?>
