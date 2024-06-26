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
$presentParking = isset($_GET['parking']) ? $_GET['parking'] : "0";
$hotelVotePairing = isset($_GET['vote']) ? intval($_GET['vote']) : 0 ;

//var_dump($hotels);
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

    <form action="">
        <label for="parking">parchggio</label>
        <select name="parking" id="">
            <option value="0" selected>nessun filtro</option>
            <option value="1">con parcheggio</option>
            <option value="2">senza parcheggio</option>
        </select>

        <label for="vote">stelle</label>
        <select name="vote" id="">
            <option value="0">nessun filtro</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <button>invia</button>
    </form>

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

            foreach ($hotels as $hotel ) {

                //$hotel = $hotels[$i];
                $hotelName = $hotel['name'];
                $hotelDescription = $hotel['description'];
                $hotelParking = $hotel['parking'];
                $hotelVote = $hotel['vote'];
                $hotelDistance = $hotel['distance_to_center'];
            ?>
           
                <tr class="<?php echo $presentParking === '2' && $hotelParking === true || $presentParking === '1' && $hotelParking === false || $hotelVotePairing !== 0 && $hotelVotePairing !== $hotelVote ? 'd-none': "" ?>">
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