<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu del Ristorante</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
  <h1 class="mb-4">Menu del Ristorante da Gigi</h1>
  <?php
    $menu = array("Rigatoni alla carbonara"=>8.50, "Pizza margherita"=>6.99, "Tagliatelle al ragù"=>11.00, "Caffè"=>1.50, "Tiramisù"=>4.50);
    echo '<div class="list-group">';
    foreach ($menu as $piatto=>$c) {
      echo '<a href="#" class="list-group-item list-group-item-action">' . $piatto . "<br>" . $c . '</a>';
      
      if ($piatto === "Rigatoni alla carbonara")
      {
        echo "<img src= 'https://www.sgambaro.it/wp-content/uploads/2022/04/carbonara_1600x2000.jpg' style='width:500px'";        
        echo "<br><br>";
      }elseif ($piatto === "Pizza margherita")
      {
        echo "<img src= 'https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?crop=center&height=800&v=1644590028&width=800' style='width:500px'";    
        echo "<br><br>";
      }elseif ($piatto === "Tagliatelle al ragù")
      { 
        echo "<img src= 'https://media-assets.lacucinaitaliana.it/photos/61fb130ae334e788eab040b9/1:1/w_800,h_800,c_limit/Tagliatelle-con-rag%C3%B9-alla-bolognese.jpg' style='width:500px'";
        echo "<br><br>";
      }elseif ($piatto === "Caffè")
      {
        echo "<img src= 'https://www.caffeborbone.com/dw/image/v2/BHCB_PRD/on/demandware.static/-/Library-Sites-CaffeBorboneSharedLibrary/default/dw014eba09/split_banner/caffe-espresso-quali-sono-le-sue-origini_split.jpg?sw=1090&sh=728' style='width:500px'";
        echo "<br><br>";
      }elseif ($piatto === "Tiramisù")
      {
        echo "<img src= 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2023/08/tiramisu-cremoso/tiramisu-cremoso-finale.jpg' style='width:500px'" ;  
        echo "<br><br>";
      }
    }
    echo '</div>';
  ?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
