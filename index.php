<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis delectus dolores ad rerum incidunt voluptatibus. Hic exercitationem quia dolor quidem, itaque ullam cum corrupti numquam consectetur optio magni aspernatur!',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis delectus dolores ad rerum incidunt voluptatibus. Hic exercitationem quia dolor quidem, itaque ullam cum corrupti numquam consectetur optio magni aspernatur!',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis delectus dolores ad rerum incidunt voluptatibus. Hic exercitationem quia dolor quidem, itaque ullam cum corrupti numquam consectetur optio magni aspernatur!',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis delectus dolores ad rerum incidunt voluptatibus. Hic exercitationem quia dolor quidem, itaque ullam cum corrupti numquam consectetur optio magni aspernatur!',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis delectus dolores ad rerum incidunt voluptatibus. Hic exercitationem quia dolor quidem, itaque ullam cum corrupti numquam consectetur optio magni aspernatur!',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    $parking = isset($_GET['parking_filter']) ? $_GET['parking_filter'] : 'no_filter';
    $voting = isset($_GET['vote']) ? $_GET['vote'] : 'all';
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
    <header>
        <img src="data:image/png;base64,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" alt="">
        <h1 class="text-center">Hotel finder</h1>
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
    </header>
    <main class="container">
        <div class="cards-container mt-5">
            <?php foreach ($hotels as $hotel) { ?>
                <?php if($parking == 'no_filter' && $voting == 'all' 
                || $parking == 'no_filter' && $voting == 'one' && $hotel['vote'] >= 1
                || $parking == 'no_filter' && $voting == 'two' && $hotel['vote'] >= 2
                || $parking == 'no_filter' && $voting == 'three' && $hotel['vote'] >= 3
                || $parking == 'no_filter' && $voting == 'four' && $hotel['vote'] >= 4
                || $parking == 'no_filter' && $voting == 'five' && $hotel['vote'] >= 5
                || $parking == 'on' && $hotel['parking'] === true && $voting == 'all'
                || $parking == 'on' && $hotel['parking'] === true && $voting == 'one' && $hotel['vote'] >= 1
                || $parking == 'on' && $hotel['parking'] === true && $voting == 'two' && $hotel['vote'] >= 2
                || $parking == 'on' && $hotel['parking'] === true && $voting == 'three' && $hotel['vote'] >= 3
                || $parking == 'on' && $hotel['parking'] === true && $voting == 'four' && $hotel['vote'] >= 4
                || $parking == 'on' && $hotel['parking'] === true && $voting == 'five' && $hotel['vote'] >= 5
                ) { ?>
                <div class="card mb-5">
                    <img class="card-img-top" src="https://www.belvederericcione.com/images/content/990452_55272_2_C_1800_1014_0_458814346/belvedere2-bassa.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $hotel['name'] ?></h5>
                        <p class="card-text"><?php echo $hotel['description'] ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                            <strong>Parcheggio: </strong>
                            <?php
                                if($hotel['parking']){
                                    echo 'Si';
                                } else {
                                    echo 'No';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Voto: </strong>
                            <?php echo $hotel['vote'] ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Distanza dal centro: </strong>
                            <?php echo $hotel['distance_to_center'] ?> km
                        </li>
                    </ul>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </main>
    
    <!-- Bootstrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- /Bootstrap CDN js -->
</body>
</html>