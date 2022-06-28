<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php' ?>
</head>
<body>
    <?php require_once 'header.php'?>
    <div class="intro">
        <div>
            <h1>Vakantie huizen</h1>
        </div>
        <img src="img/Vakantiehuis.jpg">
    </div>
    <div class="shop_container">
        <!-- Filter sidebar -->
        <div class="side_bar">
            <h2>filters</h2>
        </div>

        <div class="grid_container">
            <?php
                for ($x = 0; $x <= 10; $x++) {
            ?>
            <div class="grid_item">
                <div class="big">
                <p>Breda</p>
                <img src="img/huis.jpg" class="img-fluid rounded-top" alt="">
                    <div class="desc">
                        <div class="spacing">
                            <p>prijs:  <span>20</span></p>
                            <p>groote: <span>20</span></p>
                        </div>
                        <div class="spacing">
                            <p>slaapkamers: <span>20</span></p>
                            <p>gasten: <span>20</span></p>
                        </div>
                    </div>
                    <button class="button-10">Kopen</button>
                </div>
            </div>
            <?php
                
                }
            ?>
            
            
        </div>
    </div>
</body>
</html>