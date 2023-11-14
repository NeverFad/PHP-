<?php
$r =rand(0,255);
$g =rand(0,255);
$b =rand(0,255);

$color [8];
for($i = 1 ; $i<=8 ;$i++)
{
   if($r>=255)$r = 255;
   else  $r =($r+10);
   if($g>=255)$g = 255;
   else $g =($g+11);
   if($b>=255)$b =255;
   else $b =($b+12);

   $color[$i] = "rgb($r,$g,$b)";
  
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="姓名-学号">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh"  content = "2">
    <title> Document</title>
    <style>
        body{
            display:flex;
            flex-wrap:wrap;
        }
        div{
            height:300px;
            width: 350px;
            margin:20px;
           
            display:flex;
            justify-content:center;
            align-items:end;
        }
        h3{
            width:350px;
            text-align:center;
            background-color:#ffffff;
            margin:0px;
        }

        div:nth-of-type(1)
        {
            background-color:<?php echo $color[1] ?>;
        }
        div:nth-of-type(2)
        {
            background-color: <?php echo $color[2] ?>;
        }
        div:nth-of-type(3)
        {
            background-color: <?php echo $color[3] ?>;
        }
        div:nth-of-type(4)
        {
            background-color: <?php echo $color[4] ?>;
        }
        div:nth-of-type(5)
        {
            background-color: <?php echo $color[5] ?>;
        }
        div:nth-of-type(6)
        {
            background-color: <?php echo $color[6] ?>;
        }
        div:nth-of-type(7)
        {
            background-color: <?php echo $color[7] ?>;
        }
        div:nth-of-type(8)
        {
            background-color: <?php echo $color[8] ?>;
        }
      
       
    </style>
</head>
<body>
<div>
<h3>调色板</h3>
</div>
<div>
<h3>调色板</h3>
</div>
<div>
<h3>调色板</h3>
</div>
<div>
<h3>调色板</h3>
</div>
<div>
<h3>调色板</h3>
</div>
<div>
<h3>调色板</h3>
</div>
<div>
<h3>调色板</h3>
</div>
<div>
<h3>调色板</h3>
</div>

</div>

</body>
</html>