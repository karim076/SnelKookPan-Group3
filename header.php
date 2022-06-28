<?php require_once 'backend/config.php';
?>
<header>
	<div class="navbar">
		<div>
			<a class="active" href="<?php echo $base_url?>/index.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a class="active" href="<?php echo $base_url?>/shop.php"><i class="fa fa-fw fa-home"></i> Vakantie huizen</a>
			<a class="active" href="<?php echo $base_url?>/overons.php"><i class="fa fa-fw fa-home"></i> Over ons</a>
			<a class="active" href="<?php echo $base_url?>/contact.php"><i class="fa fa-fw fa-home"></i> Contact</a>
		<?php 
		error_reporting(E_ALL);
		//if(isset($_SESSION['role']) and  $_SESSION['role'] === "2"):?>
			<!-- <a href="<?php //echo $base_url?>/adminPanel/adminPaneel.php"><i class="fa fa-user-tie"></i> Adminpaneel</a> -->
		<?php //endif;?>
			</div>
		<div class="left">
		<?php   error_reporting(E_ERROR | E_WARNING | E_PARSE);
			session_start();
			if(isset($_SESSION['user_id'])): ?>
				<i class="fa fa-fw fa-user"></i>Welcome,<?php echo $_SESSION['name'] ?>
				<a href="<?php echo $base_url?>/login/logout.php">Uitloggen</a>
			<?php else: ?>
				<a href="<?php echo $base_url?>/login/register.php"><i class="fas fa-user-plus"></i> register</a>
				<a href="<?php echo $base_url?>/login/login.php"><i class="fa fa-fw fa-user"></i> Login</a>
			<?php endif; ?>
		</div>
	</div>
</header>