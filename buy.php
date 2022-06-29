<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require_once 'head.php' ?>
</head>
<body>
	<?php// met id alle info ophalen
        require_once 'backend/conn.php';
        $query = "SELECT * FROM huisinfo WHERE id = <";
        $statement = $conn->prepare($query);
        $statement->execute();
        $buy = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($buy as $huis): ?>
    <?php require_once 'header.php' ?>
    <main>
    	<div>
    		<img class="buyImage" src="<?php echo $huis["img"] ?>">
    	</div>
    <?php endforeach; ?>
    </main>
    <?php require_once 'footer.php' ?>
</body>
</html>