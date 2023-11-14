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
        body 
        {
            display :flex;
            justify-content : center;
            

        }
        form 
        {
            width :300px;
            height :700px;
         
        }
        h1{
            text-align :center;
        }

        h5{
            text-align :center;
        }
        .container{
            display : flex;
            justify-content:space-around;
            width:300px;
            height:100px;
        }
        .box {
            width:80px;
            height:80px;
        }
        .box1 {
            width:160px;
            height:160px;
        }
        img{
            max-width :100%;
            height : auto;
        }
        .answer {
            display : flex;
            justify-content:space-around;
            width:300px;
            height : 100px;
        }
      .Final{
            display : flex;
            justify-content:center;
            width:300px;
            height : 100px;
      }
      .sm{
        margin-left:130px;
      }
    </style>
</head>
<body>

<form action=""  method ="post" >
   
    <h1>猜拳小游戏</h1>
    <br>
    <h5>请进行选择</h5>
    <div class = "container"> 
        <div class = "box"><img src="shitou.png" alt=""> <input type="radio" name = 'caiquan' value = 'shitou'>石头</div>
        <div class = "box"><img src="jiandao.png" alt=""><input type="radio" name = 'caiquan' value = 'jiandao'>剪刀</div>
        <div class = "box"><img src="bu.png" alt=""><input type="radio" name = 'caiquan' value = 'bu'>布</div>
    </div>

    <h5>系统进行选择</h5>
    <h5>系统选择完毕，请进行提交</h5>
    <input type="submit" name = 'sm' class = 'sm'>
    <br>结果：
    
    
    <?php
    $arr= ["jiandao","shitou","bu"];
    $r = $arr[rand(0,2)] ;
    $user = $_POST['caiquan'];
    
    ?>
    <div class= 'answer'>
        <div class = "box"> <img src="<?php echo $r."."."png"?>"  alt=""> 系统选择</div>
        <div class = 'box'> <img src="<?php echo $user."."."png"?>"  alt="">用户选择 </div>
    </div>
    <?php

    /*switch($r)
    {
        case "jiandao": echo "系统选择剪刀";
        break;
        case "shitou" : echo "系统选择石头";
        break;
        case "bu"   : echo " 系统选择布";
    }*/
  
    $Final_answer;
    if($r == $_POST['caiquan'])$Final_answer= "平局";
    if($r == "shitou" ){
        if( $_POST['caiquan'] =="jiandao")$Final_answer= "你输啦";
        if( $_POST['caiquan'] =="bu")$Final_answer= "你赢啦";
    }
    if($r == "jiandao" ){
        if( $_POST['caiquan'] =="bu")$Final_answer= "你输啦";
        if( $_POST['caiquan'] =="shitou")$Final_answer= "你赢啦";
    }
    if($r == "bu" ){
        if( $_POST['caiquan'] =="shitou")$Final_answer= "你输啦";
        if( $_POST['caiquan'] =="jiandao")$Final_answer= "你赢啦";
    }
    ?>
    <br>
    <br>
   <div class = "Final">
    <div class = "box1">
        <img src="<?php echo $Final_answer."."."png" ?>" alt="">
    </div>
   </div>
   
</form>



</body>
</html>