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

    
  <tbody>
  <?php foreach ($hotels as $hotel) : ?>
  
        <?= $hotel['name'] ?>
        <?= $hotel['description'] ?>
        <?= $hotel['parking'] ?>
       <?= $hotel['vote'] ?><i class="ms-3 fa-solid fa-star"></i>
        <?= $hotel['distance_to_center'] ?> km
    
    <?php endforeach ?>











  </tbody>







    </body>
</html>


