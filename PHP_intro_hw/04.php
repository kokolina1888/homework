
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Борса</title>
    <style type="text/css">
        table {
            border-collapse: collapse;            
        }
        table td {
            border: 1px solid tomato;

        }
    </style>
</head>
<body>
    <?php 
    $price = 120;
    $dollar = 1.73098;
    $price_in_dollar = $price/$dollar;
    ?>
    <table>
        <tr>
            <td colspan="2">
                Цена на борсови стоки при курс на долара = 
                <?php echo $dollar.'USD';?>
            </td>
        </tr>
        <tr>
            <td>
                Барел/BGN
            </td>
            <td>
                <?php echo $price; ?>
            </td>
        </tr>
        <tr>
            <td>
                Барел/USD
            </td>
            <td>
            <?php echo round($price_in_dollar, 2); ?>
            </td>
        </tr>

    </table>

    
</body>
</html>
