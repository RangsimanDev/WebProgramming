<?php
    require("connectDB.php");
    $sql = "SELECT im.file_name FROM product AS pr INNER JOIN images AS im
            ON pr.id_img = im.id_img";

    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="S20.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow Semi Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Asap:wght@300&display=swap">
</head>
<body>
    <div class="title">
        <label class="textTitle">Active Tours</label>
    </div>
    <div class="container">
        
   <?php while($row = mysqli_fetch_array($result)){ ?>
        <div class="box">
                <img class="image-4" src="image/<?=$row[0];?>">
                <h4 class="u-text">$600</h4>
                <h5 class="u-text-1">MOUNTAINS TRAVEL &nbsp;</h5>
                <p>
                    Sample text. Click to select the text box. Click again or double click to start editing the text.
                </p>
                <button type="button">BOOK NOW</button>
        </div>
        <div class="box">
            <!-- <img class="image" src="image/<?=$row[0];?>"> -->
            <h4 class="u-text">$800</h4>
            <h5 class="u-text-1">SURF TRAVEL &nbsp;</h5>
            <p>
                Sample text. Click to select the text box. Click again or double click to start editing the text.
            </p>
            <button type="button">BOOK NOW</button>
        </div>
        <div class="box">
            <!-- <img class="image" src="image/yttytytyy.jpg" alt=""> -->
            <h4 class="u-text">$700</h4>
            <h5 class="u-text-1">OCEAN TRAVEL &nbsp;</h5>
            <p>
                Sample text. Click to select the text box. Click again or double click to start editing the text.
            </p>
            <button type="button">BOOK NOW</button>
        </div>
        <div class="box">
            <!-- <img class="image-4" src="image/ytyt.jpg" alt=""> -->
            <h4 class="u-text">$700</h4>
            <h5 class="u-text-1">SUNMER TRAVEL &nbsp;</h5>
            <p>
                Sample text. Click to select the text box. Click again or double click to start editing the text.
            </p>
            <button type="button">BOOK NOW</button>
        </div>
        <div class="box">
            <!-- <img class="image" src="image/uuyyuuuuu.jpg" alt=""> -->
            <h4 class="u-text">$900</h4>
            <h5 class="u-text-1">PHOTO TOUR &nbsp;</h5>
            <p>
                Sample text. Click to select the text box. Click again or double click to start editing the text.
            </p>
            <button type="button">BOOK NOW</button>
        </div>
        <div class="box">
            <!-- <img class="image" src="image/-min.jpg" alt=""> -->
            <h4 class="u-text">$700</h4>
            <h5 class="u-text-1">ISLANDS &nbsp;</h5>
            <p>
                Sample text. Click to select the text box. Click again or double click to start editing the text.
            </p>
            <button type="button">BOOK NOW</button>
        </div>
    </div>
    <div class="refer">
        <label>Image from <a href="">Freepik</a></label>
    </div>
    <section class="footer">
        <label>
            <a class="a-2" href="">Free Website Templates</a>
            created with
            <a class="a-2" href="">HTML Website Builder</a>
        </label>
    </section>
    <?php
    }
    mysqli_close($conn);
    ?>
</body>
</html>

