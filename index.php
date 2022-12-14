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

    $parking = isset($_GET['parking_filter']) ? $_GET['parking_filter'] : 'no_filter';
    $voting = $_GET['vote']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- Bootstrap CDN CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap CDN CSS -->
    <!-- Fontawesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /Fontawesome CDN -->
</head>
<body>
    <main class="container">
        <h1 class="text-center mb-3">Hotel List:</h1>

        <form action="index.php" method="GET" class="custom-control custom-checkbox px-4 py-3">
            <input type="checkbox" class="custom-control-input" id="customCheck1" name="parking_filter" value="on">
            <label class="custom-control-label" for="customCheck1">Filtra Hotel con parcheggio</label>

            <select class="mx-4" name="vote" id="">
                <option value="all" selected>Qualsiasi voto</option>
                <option value="one">Voto 1</option>
                <option value="two">Voto 2</option>
                <option value="three">Voto 3</option>
                <option value="four">Voto 4</option>
                <option value="five">Voto 5</option>
            </select>

            <button type="submit"><i class="fa-solid fa-magnifying-glass-location"></i></button>
        </form>

        <table class="table table-hover mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($hotels); $i++) { ?>
                    <?php if($parking == 'no_filter' && $voting == 'all' 
                    || $parking == 'no_filter' && $voting == 'one' && $hotels[$i]['vote'] >= 1
                    || $parking == 'no_filter' && $voting == 'two' && $hotels[$i]['vote'] >= 2
                    || $parking == 'no_filter' && $voting == 'three' && $hotels[$i]['vote'] >= 3
                    || $parking == 'no_filter' && $voting == 'four' && $hotels[$i]['vote'] >= 4
                    || $parking == 'no_filter' && $voting == 'five' && $hotels[$i]['vote'] >= 5
                    || $parking == 'on' && $hotels[$i]['parking'] === true && $voting == 'all'
                    || $parking == 'on' && $hotels[$i]['parking'] === true && $voting == 'one' && $hotels[$i]['vote'] >= 1
                    || $parking == 'on' && $hotels[$i]['parking'] === true && $voting == 'two' && $hotels[$i]['vote'] >= 2
                    || $parking == 'on' && $hotels[$i]['parking'] === true && $voting == 'three' && $hotels[$i]['vote'] >= 3
                    || $parking == 'on' && $hotels[$i]['parking'] === true && $voting == 'four' && $hotels[$i]['vote'] >= 4
                    || $parking == 'on' && $hotels[$i]['parking'] === true && $voting == 'five' && $hotels[$i]['vote'] >= 5
                    ) { ?>
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
                <?php } ?>
            </tbody>
        </table>
    </main>
    
    <!-- Bootstrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- /Bootstrap CDN js -->
</body>
</html>