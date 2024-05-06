<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere ',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro ',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare ',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista ',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano ',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/aa1661fd5d.js" crossorigin="anonymous"></script>
    <title>PHP HOTEL</title>
</head>
<body>
    <H1 class="text-center">HOTEL NEL COMUNE DI PHP</H1>
    <ul class="d-flex flex-column list-unstyled mx-2">
        <?php foreach($hotels as $hotel) { ?>
            <li class="mt-2" >
                <h2 class="mb-0"><?php echo $hotel['name'];?></h2>
                <p class="mb-0"><?php echo $hotel['description'];?></p>
                <?php if($hotel['parking']===false){ ?>
                   Parcheggio: <i class="fa-solid fa-xmark text-danger"></i>
                  
               <?php }
                elseif($hotel['parking']===true) { ?>
                   Parcheggio: <i  class="fa-solid fa-check text-primary"></i>
              <?php } ?>
              <div>
                <strong class="text-warning">
                    voti:
                   <?php echo $hotel['vote'] ?>
                </strong>
              </div>
              <div>
                <?php echo $hotel['distance_to_center'] ?>
                Km
              </div>
              
            </li>
        <?php } ?>
    </ul>

</body>
</html>