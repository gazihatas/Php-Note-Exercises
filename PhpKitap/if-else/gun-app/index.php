<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gün app</title>
</head>
<body>
    
    <?php
        $saat = date("H");

        if($saat <= 05)
        {
            echo "Gece sonrası";
        } else if($saat > 22){
            echo "Gece";
        } else if($saat >= 18){
            echo "Akşam";
        } else if($saat > 12){
            echo "Öğleden sonra";
        } else if($saat >= 06) {
            echo "Sabah";
        }
    ?>


</body>
</html>