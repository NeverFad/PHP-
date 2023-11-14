<?php 
    session_start();
    if(!isset($_SESSION['Answer']))
    {
        $radom = random_int(0,10);
        $_SESSION['Answer']=$radom;
    }
    
    if(!isset($_SESSION['Index']))
    {
        $_SESSION['Index']=0;
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
   
   
       .inputText {

    width: 60%;
    padding: .4375rem .75rem;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.4285714;
    color: #232e3c;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #dadcde;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 4px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
        body{
            display:flex;
            justify-content:center;
        }
        .content{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            margin-top:100px;
            width:500px;
            height:400px;
            
            background-image: linear-gradient(to left bottom, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
            border-radius:10px;
        }
        .main{
            display:flex;
            justify-content:center;
            align-items:center;
           
            width:300px;
            height:100px;
            
            border-radius:5px;
            
        }
        h3{
            color:#34495E;
        }
        h5{
            color:#2c3e50;
        }
        .show{
            margin-top:50px;
            width:400px;
            height:50px;
            
            display:flex;
            justify-content:space-around;
            align-items:center;

        }
        .button{
                width:80px;
                height:40px;
        }
        .sub{
            width:60px;
            height:30px;
            border:1px solid #206BC4;
            border-radius:5px;
            background-color:#206BC4;
            color:white;
        }
        .button{
            width:80px;
            height:40px;
            border:1px solid #206BC4;
            border-radius:5px;
            background-color:#206BC4;
            color:white;
        }
       
    </style>
</head>
<body>
    <div class ="content" >
        <h3>猜数字游戏</h3>
        <h5>该数字在0~20之间，能用几次将该数字猜出来</h5>
    <div class ='main'>
        <form action="" method ="post" target="hidden">

            <input type="text" class="inputText" name="input" placeholder="输入数字">
            
            <input type="submit" name ='sm' value = "提交" class = "sub">
        </form>
    </div>
    
    <?php
    if(isset($_POST['input']))
    {
        if(is_numeric($_POST['input']))
        {
            if($_POST['input']>$_SESSION['Answer']){ echo "bigger";$_SESSION['Index']++;}
            else if($_POST['input']<$_SESSION['Answer']){ echo "smaller";$_SESSION['Index']++; }
            else {echo "Right"; $_SESSION['Index']++;}
        }
        else 
        {
            
         ?>   
            <script>
            alert("请输入数字");
             </script>

       <?php }

       
    }
    
    ?>


  
    <div class="show">
        <div class = "showIndex">猜的次数:<?php if(!isset($_POST['update']))echo $_SESSION['Index'];else echo 0;?></div>
        <div class = "showAnswer"> 正确答案:<?php if($_POST['input']==$_SESSION['Answer']){ echo $_SESSION['Answer'];} ?></div>
        <form action="" method ="post">
        <input type="submit" name ="update" class = "button" value ="重新生成" >
        </form>
        <?php 
        if(isset($_POST['update']))
        {
            $_SESSION['Index']=0;
            $_SESSION['Answer']=$radom;
            
        }
        ?>
        
    </div>
    </div>
</body>
</html>