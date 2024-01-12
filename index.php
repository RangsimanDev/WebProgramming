<?php
    require("connectDB.php");
    $sql = "SELECT im.file_name,pr.name,pr.text,pr.cost FROM product AS pr INNER JOIN images AS im
            ON pr.id_img = im.id_img";

    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Tours</title>
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
                <img class="image-4" src="image/<?= $row[0] ?>" onMouseDown="on()">
                <h4 class="u-text">$<?=$row[3];?></h4>
                <h5 class="u-text-1"><?=$row[1];?> &nbsp;</h5>
                <p>
                    <?= $row[2];?>
                </p>
                <button type="button" onclick="show()">BOOK NOW</button>
        </div>
    <?php
    }
    mysqli_close($conn);
    ?>
    </div>
    <div class="refer">
        <label>Image from <a href="https://nicepage.com/html-templates/preview/active-tours-4030800?device=desktop">Freepik</a></label>
    </div>
    <footer class="footer">
        <label>
            <a class="a-2" href="https://nicepage.com/html-templates/preview/active-tours-4030800?device=desktop">Free Website Templates</a>
            created with
            <a class="a-2" href="https://nicepage.com/html-templates/preview/active-tours-4030800?device=desktop">HTML Website Builder</a>
        </label>
    </footer>
  
</body>
    <script>
        function show() {
        alert("อยากจะวอนขอ อาจารย์ ให้ A !!!");
        }

        function on(){
            alert("มันคือรูปภาพ!!!!");
        }
    </script>
</html>

