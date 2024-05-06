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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Presenza parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal Centro</th>
            </tr>
        </thead>
        <tbody>
            <?php

            for ($i = 0; $i < count($hotels); $i++) {

                $hotel = $hotels[$i];
                $hotelName = $hotel['name'];
                $hotelDescription = $hotel['description'];
                $hotelParking = $hotel['parking'];
                $hotelVote = $hotel['vote'];
                $hotelDistance = $hotel['distance_to_center'];
            ?>
                <tr>
                    <th scope="row"> <?php echo $hotelName ?></th>
                    <td><?php echo $hotelDescription ?></td>
                    <td><?php echo $hotelParking === true ? '&check;' : '&cross;' ?></td>
                    <td><?php echo $hotelVote ?></td>
                    <td><?php echo $hotelDistance ?></td>
                </tr>

            <?php

            }
            ?>

        </tbody>
    </table>




</body>

</html>