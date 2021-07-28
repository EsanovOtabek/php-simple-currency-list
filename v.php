
<? 

$uri="https://nbu.uz/en/exchange-rates/json/";
$json=json_decode(file_get_contents($uri),true);
$valyuta=array_reverse($json);
$i=1;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valyuta</title>
    <style>
        table {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        table td, table th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

        table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
    </style>
</head>
<body>
    <h2 align="center"><?=$json[0]['date']?></h2>
    <table id="currency">
    <tr>
        <th> №</th>
        <th> Code</th>
        <th> Currency </th>
        <th> Nbu Buy </th>
        <th> Nbu Sell </th>
        <th> Central Bank </th>
    </tr>
    <? foreach ($valyuta as $key => $currency) {?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$currency['code']?></td>
            <td>1 <?=$currency['title']?></td>
            <td><?
                $x=trim($currency['nbu_buy_price']);
                echo $x;
                if(strlen($x)>0)echo" so'm";
                ?>
            </td>
            <td><?
                $x=trim($currency['nbu_buy_price']);
                echo $x;
                if(strlen($x)>0)echo" so'm";
                ?>
            </td>
            <td><?=$currency['cb_price']?> so'm</td>
        </tr>
   <? } ?>

   

    </table>


</body>
</html>
