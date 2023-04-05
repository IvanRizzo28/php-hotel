<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">description</th>
                <th scope="col">parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $x => $hotel){ ?>
                <?php echo "<tr>"; ?>
                <?php echo   '<th scope="row">'.($x+1).'</th>'; ?>
                <?php echo   '<td>'.$hotel["name"].'</td>' ?>
                <?php echo   '<td>'.$hotel["description"].'</td>' ?>
                <?php
                    if($hotel["parking"]) echo '<td>Si</td>';
                    else  echo '<td>No</td>';
                ?>
                <?php echo   '<td>'.$hotel["vote"].'</td>' ?>
                <?php echo   '<td>'.$hotel["distance_to_center"].'</td>' ?>
                <?php echo "</tr>"; ?>
                <?php } ?>
        </table>
    <?php 
        foreach($hotels as $x => $hotel) {
            echo $hotel["name"];
            echo $hotel["description"];
            echo $hotel["parking"];
            echo $hotel["vote"];
            echo $hotel["distance_to_center"];
        }
    ?>
    </div>
</body>
</html>