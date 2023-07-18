<?php
include 'data/data.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <title>Php-Hotel</title>
     </head>

    <body>

    
    <table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th class="text-primary">Nome</th>
      <th class="text-primary">Descrizione</th>
      <th class="text-primary">Parcheggio</th>
      <th class="text-primary">Voto</th>
      <th class="text-primary">Distanza</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($hotels as $hotel) : ?>
    <tr>
        <td><?= $hotel['name'] ?></td>
        <td><?= $hotel['description'] ?></td>
        <td><?= $hotel['parking'] ?></td>
        <td><?= $hotel['vote'] ?><i class="ms-3 fa-solid fa-star text-warning"></i></td>
        <td><?= $hotel['distance_to_center'] ?> km</td>
    </tr>
    <?php endforeach ?>











  </tbody>







    </body>
</html>


