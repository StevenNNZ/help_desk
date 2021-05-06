<?php 
	require_once("../../config/conexion.php");
	if(isset($_SESSION['usu_id'])){
?>
<!DOCTYPE html>
<html>
    <?php
		require_once "../mainHead/head.php";
	?>
	<title>Help Desk Nuevo Ticket</title>
</head>
<body class="with-side-menu">
	<?php 
		require_once "../mainHeader/header.php";
	?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once "../mainNav/nav.php" ?>

	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="box-typical box-typical-padding">
				<p>
					Aquí puede registrar un nuevo ticket de helpdesk.
				</p>
				<h5 class="m-t-lg with-border">Ingresar información.</h5>

					<div class="row">
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoria</label>
								<select id="cata_id" class="form-control">
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInputEmail1">Título</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese un título">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
								<div class="summernote-theme-1">
									<textarea class="summernote" id="ticket_descrip" name="name">Hello Summernote</textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="button" class="btn btn-rounded btn-inline btn-primary">Primary</button>
						</div>
					</div><!--.row-->

			</div><!--.box-typical-->
		</div>
	</div>
	<?php 
		require_once "../mainJS/js.php";
	?>
	<script type="text/javascript" src="nuevoTicket.js"></script>
</body>
</html>
<?php 
	}else{
		header("location:".Conectar::ruta()."index.php");
	}
?>