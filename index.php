<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

<h1>Lista Degli Hotels</h1>

<div>
    <div>
        <table>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($hotels as $hotelSingolo){?>
                        <tr>
                             <?php 
                                    $hotelName = $hotelSingolo['name'];
                                    $hotelDescription = $hotelSingolo['description'];
                                    $hotelParking = $hotelSingolo['parking'];
                                    $hotelVote = $hotelSingolo['vote'];
                                    $hotel_distance_to_center = $hotelSingolo['distance_to_center'];
                                ?>
                            <td>
                                <?php echo $hotelName?>
                            </td>
                            <td>
                                <?php echo $hotelDescription?>
                            </td>
                            <td>
                                <?php if($hotelParking === true){
                                    echo 'Parcheggio Disponibile';
                                }else{
                                    echo 'Parcheggio non disponibile';
                                }?>
                             </td>
                            <td>
                                <?php echo $hotelVote?>
                            </td>
                            <td>
                                <?php echo $hotel_distance_to_center?>
                            </td>
                            </tr>
                    <?php }?>
        </tbody>
    </div>
        </table>
        
</div>

</body>
</html>