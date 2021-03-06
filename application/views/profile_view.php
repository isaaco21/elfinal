<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mi perfil</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">INMOBI-ITLA</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h4>Profile Summary</h4>
			<hr/>
			<p>Name: <?php echo $uname; ?></p>
			<p>Email: <?php echo $uemail; ?></p>

		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Direccion</th>
					<th>Tipo</th>
					<th>Precio</th>
					<th>Accion</th>
					<th>Descripcion</th>
					<td>
						--
					</td>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($casas as $add) {
						echo "<tr>
							<td>{$add->titulo}</td>
							<td>{$add->direccion}</td>
							<td>{$add->tipo}</td>
							<td>{$add->precio}</td>
							<td>{$add->accion}</td>
							<td>{$add->descripcion}</td>
							</tr>";
					}

				 ?>
			</tbody>

	</div>
</div>
<div class="container">
		<a type="button" href="<?php echo site_url('add')?>"class="btn btn-default">registro inmueble</a>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
