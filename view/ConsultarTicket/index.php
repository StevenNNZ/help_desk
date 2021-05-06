<?php 
	require_once("../../config/conexion.php");
	if(isset($_SESSION['usu_id'])){
?>
<!DOCTYPE html>
<html>
    <?php
		require_once "../mainHead/head.php";
	?>
	<title>Help Desk Consultar Ticket</title>
</head>
<body class="with-side-menu">
	<?php 
		require_once "../mainHeader/header.php";
	?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once "../mainNav/nav.php" ?>

	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php 
		require_once "../mainJS/js.php";
	?>
	<script type="text/javascript" src="consultarTicket.js"></script>
</body>
</html>
<?php 
	}else{
		header("location:".Conectar::ruta()."index.php");
	}
?>