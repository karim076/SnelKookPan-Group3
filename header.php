<?php require_once 'backend/config.php';
?>
<header>
	<div class="navbar">
		<div>
			<a class="active" href="<?php echo $base_url?>/index.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a class="active" href="<?php echo $base_url?>/shop.php"><i class="fa fa-fw fa-home"></i> Vakantie huizen</a>
			<a class="active" href="<?php echo $base_url?>/overons.php"><i class="fa fa-fw fa-home"></i> Over ons</a>
			<a class="active" href="<?php echo $base_url?>/contact.php"><i class="fa fa-fw fa-home"></i> Contact</a>
		<?php error_reporting(E_ALL);?>

			</div>
		<div class="left">
		<?php
		//var_dump($_SESSION['role']);
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
			session_start();
			if(isset($_SESSION['user_id'])): ?>
				<i class="fa fa-fw fa-user"></i>Welcome,<?php echo $_SESSION['name'] ?>
				<a href="<?php echo $base_url?>/login/logout.php">Uitloggen</a>

				<?php if(isset($_SESSION['role']) and  $_SESSION['role'] === "1" or $_SESSION['role'] === "2"):?><!-- role 0 = normal user/ role 1 = create only functions/role 2 = all functions(admin)  -->
					<a href="<?php echo $base_url?>/huren/create.php"><i class="fa fa-user-tie"></i>Verhuur</a>
				<?php endif;?>
			<?php else: ?>
				<a href="<?php echo $base_url?>/login/register.php"><i class="fas fa-user-plus"></i> register</a>
				<a href="<?php echo $base_url?>/login/login.php"><i class="fa fa-fw fa-user"></i> Login</a>
			<?php endif; ?>
		</div>
	</div>
</header>

