<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<title>Tabella creata da AxB</title>
</head>
<body>
<?php
    $testo=$_GET ['testo'];
    $righe=$_GET ['righe'];
    $colonne=$_GET ['colonne'];
    echo '<table class="table table-striped">';
    for ($i = 1;$i <= $righe;$i++)
    {
        echo "<tr>";
        for ($j = 1;$j <= $colonne;$j++)
        {
            echo "<td>$testo</td>";
        }
        echo "</tr>";
    }
?>
</body>
</html>