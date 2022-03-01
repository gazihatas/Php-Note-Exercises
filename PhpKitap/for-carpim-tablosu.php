<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <table border="1">
            <?php 
                for($i = 1; $i<= 9; $i++ ){
                    echo "<tr>";
                        for ($j=1; $j <= 9 ; $j++) { 
                            echo "<td> $i x $j = ".$i * $j."</td>";
                        }
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>