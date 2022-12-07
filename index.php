<?php
include_once './class/Movie.php';
include_once './class/Cast.php';

$movie1 = new Movie("Creed", "Sportivo", "2h 13m", 5, 2015, new Cast("M.B. Jordan", "Tony Bellew"));
$movie1->setImg("https://pad.mymovies.it/filmclub/2015/04/113/locandina.jpg");

$movie2 = new Movie("The Guilty", "Thriller", "1h 30m", 5, 2021, new Cast("Jake Gyllenhaal"));

$movieList = [$movie1, $movie2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
        img {
            width: 100px;
        }

        td {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Timing</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Year</th>
                    <th scope="col">Protagonist</th>
                    <th scope="col">Antagonist</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movieList as $movie) : ?>
                    <tr class="text-center">
                        <td><?php echo $movie->title ?></td>
                        <td><img src="<?php echo $movie->getImg() ?>" alt="poster"></td>
                        <td><?php echo $movie->genre ?></td>
                        <td><?php echo $movie->timing ?></td>
                        <td><?php echo $movie->rating ?>/5</td>
                        <td><?php echo $movie->year ?></td>
                        <td><?php echo $movie->cast?->protagonist ?? 'ND' ?></td>
                        <td><?php echo $movie->cast?->antagonist ?? 'ND' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>