<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shop.css">
    <title>Shop</title>
</head>
<body>
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
                </div>
            </div>
            <?php
                
                }
            ?>
            
            
        </div>
    </div>
</body>
</html>