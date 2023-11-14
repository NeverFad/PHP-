<?php
$Nums =count($_POST["qimo"]);
$pingshi = $_POST["pingshi"];
$shijian = $_POST["shijian"];
$qimo = $_POST["qimo"];
$_90=0;$_80=0;$_70=0;$_60=0;$_0=0;

for ($j = 0 ; $j <=$Nums ; $j++)
{
    $zongfen[$j] =$pingshi[$j]*0.2 +$shijian[$j]*0.3+$qimo[$j]*0.5;
    if($zongfen[$j]>=90) $_90++;
    if($zongfen[$j]<90&&$zongfen[$j]>=80) $_80++;
    if($zongfen[$j]<80&&$zongfen[$j]>=70) $_70++;
    if($zongfen[$j]<70&&$zongfen[$J]>=60) $_60++;
    if($zongfen[$j]<60) $_0++;
}
$_00=$_0*100;$_600=$_60*100;$_700=$_70*100;$_800=$_80*100;$_900=$_90*100;

function randColor()
{
$r = rand(0,255);
$g = rand(0,255);
$b = rand(0,255);
return  $bgColor = "rgb($r,$g,$b)";
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
    <style type="text/css">
        div{
            display: flex;
            flex-direction:column;
        }
        
        table
        {
            border-collapse: collapse;
            margin: 0 auto;
            text-align: center;
        }
        table td, table th
        {
            border: 1px solid #cad9ea;
            color: #666;
            height: 30px;
        }
        table thead th
        {
            background-color: #CCE8EB;
            width: 100px;
        }
        table tr:nth-child(odd)
        {
            background: #fff;
        }
        table tr:nth-child(even)
        {
            background: #F5FAFA;
        }

        span:nth-of-type(1)
        {
            color :red;
            border-bottom: 40px <?php echo randColor()?> solid;
            width: <?php echo "$_900"."px"?>;
        }
        span:nth-of-type(2)
        {
            color :red;
            border-bottom: 40px <?php echo randColor()?> solid;
            width: <?php echo "$_800"."px"?>;
        }
        span:nth-of-type(3)
        {
            color :red;
            border-bottom: 40px <?php echo randColor()?> solid;
            width: <?php echo "$_700"."px"?>;
        }
        span:nth-of-type(4)
        {
            color :red;
            border-bottom: 40px <?php echo randColor()?> solid;
            width: <?php echo "$_600"."px"?>;
        }
        span:nth-of-type(5)
        {
            color :red;
            border-bottom: 40px <?php echo randColor()?> solid;
            width: <?php echo "$_00"."px"?>;
        }
       
    </style>

</head>

<body>
    <form action="show.php" method = 'post' >
    <table width="90%" class="table">
        <caption>
            <h2>
                成绩登记表</h2>
        </caption>
        <thead>
            <tr>
                <th>
                    序号
                </th>
                <th>
                    平时成绩(20%)
                </th>
                <th>
                    实践成绩(30%)
                </th>
                <th>
                    期末成绩(50%)
                </th>
                <th>
                    总分
                </th>
            </tr>
        </thead>
        <?php
        
        for($i = 1 ; $i<=$Nums;$i++)
        {
            echo "<tr>";
            echo "<td>$i</td>";   
            echo "<td>$pingshi[$i]</td>";
            echo "<td>$shijian[$i]</td>";
            echo "<td>$qimo[$i]</td>";
            echo "<td>$zongfen[$i]</td>";
            echo "</tr>" ;  
        }
        ?> 
    </table>
    </form>
<h2>成绩分析</h2>

    <div>
    90以上 ：<?php echo"$_90"."人"?>  <span ></span><br> 
    80分~90 ：<?php echo"$_80"."人"?> <span ></span><br>
    70分~80 ：<?php echo"$_70"."人"?> <span ></span><br>
    60分~70分 ：<?php echo"$_60"."人"?> <span></span><br>
    不及格 ：<?php echo"$_0"."人"?><span ></span><br>
    </div>


</body>
</html>