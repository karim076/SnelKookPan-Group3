<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php' ?>
    
</head>
<body>
    <?php
        require_once 'backend/conn.php';
        $query = "SELECT * FROM huisinfo";
        $statement = $conn->prepare($query);
        $statement->execute();
        $huizen = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php require_once 'header.php'?>
    <div class="intro">
        <img src="img/Vakantiehuis.jpg">
        <div class="mid">
            <h1>Vakantie huizen</h1>
        </div>
    </div>
    <div class="shop_container">
        <!-- Filter sidebar -->
        <div class="side_bar">
            <h2>filters</h2>
        </div>

        <div class="grid_container">
                <?php foreach($huizen as $huis): ?>
            <div class="grid_item">
                <div class="big">
                <p><?php echo $huis['omgeving'] ?></p>
                <img src="<?php ?>img/huis.jpg" class="img-fluid rounded-top" alt="">
                    <div class="desc">
                        <div class="spacing">
                            <p> prijs:  <span>&#8364; <?php echo $huis['prijs'] ?></span></p>
                            <p>groote: <span><?php echo $huis['formaat'] ?> m3</span></p>
                        </div>
                        <div class="spacing">
                            <p>slaapkamers: <span><?php echo $huis['slaapkamers'] ?></span></p>
                            <p>gasten: <span><?php echo $huis['gasten'] ?></span></p>
                        </div>
                    </div>
                    <form method="POST" action="buy.php">
                        <input type="hidden" value="<?php echo $huis['id'] ?>" name="id">
                        <button type="submit" class="button-10">Bekijk</button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
            
            
        </div>
    </div>
    <?php require_once 'footer.php'?>
</body>
</html>