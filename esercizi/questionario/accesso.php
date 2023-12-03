<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
      crossorigin="anonymous">

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>

<div class="container  d-flex justify-content-center align-items-center">
<h1>
<?php 
if ($_POST['password'] == "info2023")
{

    echo "LA PASSWORD E' CORRETTA";
} else{

    echo "HAI SBAGLIATO LA PASSWORD";
}
?>
<div class="container d-flex justify-content-center align-items-center">

<h6><a href="index.html">HOME</a></h6>

</div>


</div>