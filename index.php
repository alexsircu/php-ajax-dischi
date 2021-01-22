<?php
include __DIR__ . '/partials/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>

<body>
    <header></header>

    <main>
        <div class="container">
            <?php foreach ($discs as $oneDisc) { ?>
                <div class="disc-container">
                    <img src="<?php echo $oneDisc["poster"]; ?>" alt="">
                    <h2><?php echo $oneDisc["title"]; ?></h2>
                    <h3><?php echo $oneDisc["author"]; ?></h3>
                    <p><?php echo $oneDisc["year"]; ?></p>
                </div>
            <?php } ?>
        </div>
    </main>

    <footer></footer>
</body>

</html>