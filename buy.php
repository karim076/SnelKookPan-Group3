<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require_once 'head.php' ?>
</head>
<body>

	<?php
        var_dump($_POST['id']);
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
    	<div>
    		<img class="buyImage" src="img/<?php echo $huis["img"] ?>">
    	</div>
    <?php endforeach; ?>
    </main>
    <?php require_once 'footer.php' ?>
</body>
</html>