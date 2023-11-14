<?php
$year = isset($_GET["year"])? $_GET["year"] : 2023 ;
$returndate=[];

function getFirstday($year ,$month)
{
    $firstday = "$year-$month";
    $fisrtDayweek= date('N',strtotime($firstday));
    return $start = $fisrtDayweek;
}
function getdays($year,$month)
{
    $firstday = "$year-$month-1";
    $days = date('t',strtotime($firstday));
    $fisrtDayweek= date('N',strtotime($firstday));
    return $days+$fisrtDayweek-1;
}
function cal($total ,$start)
{
    $returndate=[];
    $row=[];
    for($i = 1 ;$i<=$total;$i++)
    {
    $row[]= $i-$start+1>0 ? $i-$start+1:'';
    if(count($row)==7){$returndate[]=$row; $row =[];} 
    }
    if(count($row)>0)$returndate[]=$row;

    return $returndate;
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
            display :flex;
            justify-content:center;
            align-items:center;
        }
        table{
            width: 200px;
            height:250px;
                     
        }
       .single{
            border:1px solid #CDE7F3;
            border-radius:10px 10px 5px 5px;   
            margin-top :40px;
            box-shadow:5px 5px 5px #CDE7F3  ;
       }
       
       .head{
        background-image: #1c626a82;
       }

        td{
            text-align:center;
            
        }
        h3{
            color:#D2C1EC;
        }
        caption{
            background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);

            
            border:1px solid #CDE7F3;
            border-radius:10px 10px 0px 0px; 
        }
        tr:nth-of-type(even)
        {
            background:#D7DBDD;
            border:1px solid black ;
            border-radius:5px;
        }
       
        tr:nth-of-type(odd)
        {
            background:#F0F3F4 ;
            border:1px solid black ;
            border-radius:5px;
        }
        div{
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
        }
    </style>
</head>
<body>
    <div>
    <?php for($n = 1; $n<=12 ;$n++){ ?>
    <?php $t=getdays($year,$n); $s=getFirstday($year,$n);$returndate= cal($t,$s); ?>  

    <div  class = 'single'>
    <table>
    <caption ><h3> <?php echo $year."年".$n."月" ?></h3></caption>
    
        <thead>
            <tr class = 'head'>
                <td class = 'head'>一</td>
                <td class = 'head'>二</td>
                <td class = 'head'>三</td>
                <td class = 'head'>四</td>
                <td class = 'head'>五</td>
                <td class = 'head'>六</td>
                <td class = 'head'>日</td>
            </tr>
        </thead>
           <?php 
            foreach ($returndate as $row)
           {
               echo '<tr>';
               foreach ($row as $coloumn)
               {
                echo  "<td>$coloumn</td>";
               }
               echo '</tr>';
           }
           
            ?>
    </table>
    </div>
    
    <?php } ?>
    </div>
</body>
</html>