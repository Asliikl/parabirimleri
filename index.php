<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$file_content = file_get_contents('https://iamumut.com/kurlar.json');
$data = json_decode($file_content, true);
?>

<table border="1" class="tablo">
    <tr class="tr1">
        <th>İsim</th>
        <th>CurrencyName</th>
        <th>ForexBuying</th>
        <th>ForexSelling</th>
        <th>BanknoteBuying</th>
        <th>BanknoteSelling</th>
        <th>CrossRateUSD</th>
        <th>CrossRateOther</th>
    </tr>

    <?php foreach ($data['TCMB_AnlikKurBilgileri'] as $row) { ?>
        <tr> 
            <td class="a1"><?php echo $row['Isim'] ?></td>
            <td class="a2"><?php echo $row['CurrencyName'] ?></td>
            <td class="alis"><?php echo $row['ForexBuying'] ?></td>
            <td class="satis"><?php echo $row['ForexSelling'] ?></td>
            <td class="alis"><?php echo $row['BanknoteBuying'] ?></td>
            <td class="satis"><?php echo $row['BanknoteSelling'] ?></td>
            <td class="alis"><?php echo $row['CrossRateUSD'] ?></td>
            <td class="satis"><?php echo $row['CrossRateOther'] ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
