<?php
$r = rand(0,255);
$g = rand(0,255);
$b = rand(0,255);
$r1 = rand(0,255);
$g1 = rand(0,255);
$b1 = rand(0,255);
$bgColor = "rgb($r,$g,$b)";
$h1bgColor = "rgb($r1,$g1,$b1)";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="姓名-学号">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="2">
    <title> Document</title>
    <style>
        body{
            
            height:800px;
            display:flex;

            justify-content:center;
            align-items:center;
        
        }
        div{
           background-color:<?php echo $bgColor?>;
           width: 200px;
           height:200px;

           display:flex;
           justify-content:center;
           align-items:center;
          
        }
        h1{
           
            color:<?php echo $h1bgColor?>;
        }
        
    </style>  
</head>

<body>

<div>
    <h1>你好PHP</h1>
</div>


</body>
</html>