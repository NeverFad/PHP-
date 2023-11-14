<?php
    if(!isset($_COOKIE['user'])) {
        header("location:Login.php");
        exit;
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
    <title> Document</title>
    <style>
        body{
            background-color:#ECF0F1;
        }
        .header{
            border:1px solid black;
            color:black ;
            background-color:#BDC3C7 ;
            box-shadow:10px 10px 0px red;
            display:flex;
        }
        H3{
            text-align:center;
        }
        .container{
            display:flex;
            height:500px;
        }
        .partOne{
            border:1px solid black;
            width:10%;
            display:flex;
            flex-direction:column;
            background-color:#1BF7FF;
            box-shadow:10px 10px 0px pink;
        }
        .partTwo{
            border:1px solid black;
            width:90%;
            background-color:#F8F9F9 ;
            box-shadow:10px 10px 0px black;

        }
        .Main{
            height:560px;
            width:1200px;
            margin-left:40px;
            margin-top:20px;
            
        }

        .function{
            border:1px solid pink;
            width:120px;
            height:40px;
            text-align:center;
            margin-bottom:5px;
            line-height :2.5em;
            background-color:#212F3D;
            color:#FFFFFF;
        }
        .function:hover{
            background-color:#F4D03F;
        }
        .et{
            margin-left:1200px;
            margin-bottom:0px;
            height:20px;
            border-radius: 5px;
            background-color: #64a9d9;
            cursor: pointer;
            color: #fff;
        }
        .welcome{
            margin-left:450px;
        }
        .head{
            margin-left:40px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="exit" value = "退出" class ="et">

    </form>
    
    <?php
    if(isset($_POST['exit']))header("location:Login.php");
    ?>
    <div class="Main">
        
        <div class = "header">
            <h3 class="head">后台管理</h3>
            <H5 class="welcome"> Welcome <?php echo $_COOKIE['user'] ?></H5>
        </div>

        <div class = "container">
            <div class = "partOne">
                <div class = "function">功能一</div>
                <div class = "function">功能二</div>
                <div class = "function">功能三</div>
            </div>
            <div class = "partTwo">展示卡片</div>
        </div>
    </div>
    
</body>
</html>