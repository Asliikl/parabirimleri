<?php
    $file_content = file_get_contents('https://iamumut.com/kurlar.json');
    $data = json_decode($file_content,true);

    foreach ($data['TCMB_AnlikKurBilgileri'] as $row) {
        echo '<table border="1";> <tr>';
        foreach ($row as $cell) {
            echo '<td>' . $cell . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
