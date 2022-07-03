<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require_once 'head.php' ?>
</head>
<body>

	<?php
        require_once 'backend/conn.php';
        $id = $_POST['id'];
        $query = "SELECT * FROM huisinfo WHERE id = $id";
        $statement = $conn->prepare($query);
        $statement->execute();
        $buy = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($buy as $huis): ?>
    <?php require_once 'header.php' ?>
    <main>
        <div class="details">
            <div>
                <img class="buyImage" src="img/<?php echo $huis["img"] ?>">
            </div>
            <div class="detail">
                <div class="titel"><h1>Details</div>
                <div class="centering"><p>Omgeving:  <?php echo $huis['omgeving'] ?></p></div>
                <div class="info">
                    <div>
                        <p>prijs: <span>&#8364; <?php echo $huis['prijs'] ?></span></p>
                        <p>groote: <span><?php echo $huis['formaat'] ?> m3</span></p>
                    </div>
                    <div>
                        <p>slaapkamers: <span><?php echo $huis['slaapkamers'] ?></span></p>
                        <p>gasten: <span><?php echo $huis['gasten'] ?></span></p>
                    </div>
                </div>
                <div class="wrapper">
                    <div><p>Overige informatie:</p></div>
                    <p>Stofzijgers Binnenbad, WiFi, TV, Afwasmachine, Wasmachine, Houtkachel, Verwarming, Hoge kinderstoel, Douche, Ligbad, Bagageopslag</p>
                </div>
                <form method="POST" action="reserveren.php" class="centering">
                    <button type="submit" class="noselect">Kopen</button>
                    <input type="hidden" value="<?php echo $huis['id'] ?>" name="id">
                    <input type="hidden" value="<?php echo $huis['gasten'] ?>" name="personen">
                </form>
            </div>
        </div>

    <?php endforeach; ?>
    </main>
    <?php require_once 'footer.php' ?>
</body>
</html>