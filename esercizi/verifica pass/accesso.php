<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
      crossorigin="anonymous">
      <style>
    body 
    {
      background-color: <?php echo $_GET['colore_sfondo']; ?>;
    }
  </style>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>

<div class="container  d-flex justify-content-center align-items-center">
<h1>
<?php 
if ($_GET['password'] == "password" && $_GET['utente'] == 'utente')
{
    echo 'Bentornato '.$_GET['utente'];
} else
{
  echo "PASSWORD O UTENTE SBAGLIATI, RITENTA";
}
?>
<div class="container d-flex justify-content-center align-items-center">
<h6><a href="index.php">TORNA ALLA HOME</a></h6>
</div>
</div>
<div class="container text-center min-vh-100">
  <div class="row">
    <div class="col">
    <?php
    if ($_GET['password'] == "password" && $_GET['utente'] == 'utente') 
    {
        $dettagli = 
        [
            ['UTENTE', $_GET['utente']],
            ['PASSWORD', $_GET['password']],
            ['ETA', $_GET['età']],
            ['SPORT PREFERITO', $_GET['sport_preferito']],
        ];

        foreach ($dettagli as $info) 
        {
            echo "<div class='row'>";
            echo "<div class='col'>" . $info[0] . "</div>";
            echo "<div class='col'>" . $info[1] . "</div>";
            echo "</div>";
        }
    }
    ?>
    </div>
  </div>
</div>



<?php   

$colore = $_GET['colore_sfondo'];
echo "body bgcolor = $colore"

?>
</body>