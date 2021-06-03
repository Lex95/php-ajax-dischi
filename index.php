<?php

include __DIR__ . "./partials/header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Php Ajax Disks</title>
</head>

<body>
    <div class="container-flex item-container">
        <?php
        for ($i = 0; $i < count($data); $i++) {
            echo "<div class='item container-flex'>";
            foreach ($data[$i] as $key => $value) {
                switch ($key) {
                    case "poster":
                        echo "<img src=" . $value . ">";
                        break;
                    case "title":
                        echo "<h3>$value</h3>";
                        break;
                    case "author":
                        echo "<p>$value</p>";
                        break;
                    case "genre":
                        echo "<p>$value</p>";
                        break;
                    case "year":
                        echo "<p>$value</p>";
                        break;
                    default:
                        break;
                }
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>