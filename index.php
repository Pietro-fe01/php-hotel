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
    <!-- Bootstrap CDN CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap CDN CSS -->
</head>
<body>
    <main class="container">
        <h1 class="text-center mb-3">Hotel List:</h1>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">HDistance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($hotels); $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td><?php echo $hotels[$i]['name'] ?></td>
                        <td><?php echo $hotels[$i]['description'] ?></td>
                        <td>
                            <?php
                                if($hotels[$i]['parking']){
                                    echo 'Si';
                                } else {
                                    echo 'No';
                                }
                            ?>
                        </td>
                        <td><?php echo $hotels[$i]['vote'] ?></td>
                        <td><?php echo $hotels[$i]['distance_to_center'] ?> km</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    
    <!-- Bootstrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- /Bootstrap CDN js -->
</body>
</html>