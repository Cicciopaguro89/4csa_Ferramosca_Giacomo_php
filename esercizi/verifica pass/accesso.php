<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
      crossorigin="anonymous">
      <style>
    body {
      background-color: <?php echo $_POST['colore_sfondo']; ?>;
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
if ($_POST['password' && 'utente'] == "passwordSegreta" && "utente"){

    echo "BENVENUTO UTENTE";
} else{

    echo "PASSWORD O UTENTE SBAGLIATO, INSERISCI NUOVAMENTE";
}
?>
<div class="container d-flex justify-content-center align-items-center">

<h6><a href="index.html">TORNA ALLA HOME</a></h6>

</div>


</div>




<div class="container text-center min-vh-100">
  <div class="row">
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){

        echo "NOME";
    }
    ?>
    </div>

    <div class="col">

    <?php 
    if ($_POST['password'] == "info2023"){

        echo $_POST['nome'];
    }
    ?>

    </div>
  </div>
?>
</body>