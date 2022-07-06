<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/table.css">
  <?php require_once '../head.php' ?>
</head>
<body>
    <header>
        <?php require_once '../header.php' ?>
    </header>
    <?php
        require_once '../backend/conn.php';
    /*<!-- Ophinbehandeling -->*/
        $query = "SELECT * FROM reservering";
        $statement = $conn->prepare($query);
        $statement->execute();
        $reserveren = $statement->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <main>
		<div class="">
			<div class="reserveren">                                                          
				<h1>Admin Paneel</h1>
				<div class="table scroll tableFixHead">
					<table>
						<thead>
				        	<tr class="solid">    
								<th>Email</th>
								<th>Datum</th>
								<th>Personen</th>
								<th>Straatnaam</th>
								<th>Telefoon Nr</th>
								<th>Vraag</th>
                                <th>Order nummer</th>
                                <th>Status</th>
				          	</tr>
			            </thead>
			            <?php foreach($reserveren as $taken): ?>
			            <tbody>			                
                  		<tr>
                            <td><?php echo $taken['email']; ?></td>
                            <td><?php echo $taken['datum']; ?></td>
                            <td><?php echo $taken['personen']; ?></td>
                            <td><?php echo $taken['straatnaam']; ?></td>
							<td><?php echo $taken['nummer']; ?></td>
			                <td><?php echo $taken['vraag']; ?></td>
                            <td><?php echo $taken['order_number']; ?></td>
                            <td><?php echo $taken['status']; ?></td>
			            </tr>
			            </tbody>
	            		<?php endforeach; ?>
	        		</table>
				</div>
			</div>
		</div>
	</main>
  <footer>
    <?php  require_once '../footer.php' ?>
  </footer>
</body>
</html>