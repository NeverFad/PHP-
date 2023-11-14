<?php
$nums = isset($_GET['nums'])? $_GET['nums'] : 10;
function getRandomdigit($a,$b)
{
    $grade = rand($a,$b);
    return $grade;
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
        input{
            text-align :center;
        }
        .tijiao{
            margin-left:750px;
            margin-top:50px
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
                    平时成绩
                </th>
                <th>
                    实践成绩
                </th>
                <th>
                    期末成绩
                </th>
            </tr>
        </thead>
        <?php
        for($i = 1 ; $i<=$nums;$i++)
        {
            echo "<tr>";
            echo "<td>$i</td>" ;   
            echo "<td><input type='text' name = 'pingshi[$i]' value = ".getRandomdigit(0,100)."></td>";
            echo "<td><input type='text' name = 'shijian[$i]' value = ".getRandomdigit(0,100)."></td>";
            echo "<td><input type='text' name = 'qimo[$i]' value = ".getRandomdigit(0,100)."></td>";
            echo "</tr>" ;  
        }
        ?> 
    </table>
        <input type="submit" value= '提交' class = 'tijiao'>
    </form>
</body>
</html>