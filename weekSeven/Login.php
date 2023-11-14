<?php
        if(isset($_POST['sm']))
        {
          
           if(isset($_POST['remember']))
           {
                setcookie('user' ,$_POST['user'],time()+3*60);
           }
           else
           {
            setcookie('user' ,$_POST['user']);
           }
           header("location:admin.php");
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
        * {
            list-style: none;
            text-decoration: none;
        }

        body {
            background: url("loginPicture.jpg") no-repeat;
            background-repeat: no-repeat;
            background-size: cover;
            
            

        }

        

        .login {
            width: 400px;
            height: 300px;
            margin: auto;
            margin-top: 150px;
            border-radius: 5px;
            overflow: hidden;
        }

        .input {
            width: 300px;
            height: 30px;
            padding-left: 10px;
            margin-top: 20px;
            margin-left: 50px;
        }
        .RM {
            width: 20px;
            height: 20px;
            padding-left: 10px;
            margin-top: 20px;
            margin-left: 50px;
        }

        .button {
            width: 300px;
            height: 35px;
            width: 300px;
            height: 40px;
            margin-top: 20px;
            margin-left: 50px;
            border-radius: 5px;
            background-color: #64a9d9;
            cursor: pointer;
            color: #fff;
        }

        #register {

            background-color: rgba(0, 0, 0, 0);
            box-shadow: 0 0 1 0 rgba(0, 0, 0, 0) inset;
            transition: all 1s;
        }

        #register :hover {
            background-color: rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.4);
        }

        #register ul {
            display: flex;
            justify-content: end;

        }

        #register ul li a {
            color: #f908f5e4;
        }

        #register ul li {
            padding: 10px 20px;
        }
    </style>


</head>


<body>
   
    <div class="login">
        <form action=""  method="post" >
            账号密码仅支持数字和字母
            <input onkeyup="value=value.replace(/[^\da-zA-Z]/ig,'')" class="input" type="text" name="user" placeholder="账号"><br>
            <input onkeyup="value=value.replace(/[^\da-zA-Z]/ig,'')" class="input" type="password" name="password" placeholder="密码">
            <input class="RM" type = "checkbox" name = "remember"  value = "Remember me"> Remember me
            <input type ="submit" class = "button"  name ="sm" value ="登录">

           
        </form> 

       
    </div>
</body>

</html>