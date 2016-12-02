<!DOCTYPE html>
<html>
  <head>
    <title>Agregar anuncio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
      <h3>Anuncios</h3>
      <div class="row">
      <form method="post" action="<?php echo base_url('Add/Guardar'); ?>">
      <div class="col-md-6">
        <div class="form-group input-group">
          <span class="input-group-addon">Titulo:</span>
          <input type="text" class="form-control" name="titulo"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">direccion:</span>
          <input type="text" class="form-control" name="direccion"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">tipo:</span>
          <select id="tipo" style="height:2.5em">
						<option value="casa">Casa</option>
						<option value="apartamento">Apartamento</option>
						<option value="finca">finca</option>
					</select>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">precio:</span>
          <input type="text" class="form-control" name="precio"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">accion:</span>
					<select id="accion" style="height:2.5em">
						<option value="vender">Vender</option>
						<option value="alquilar">Alquilar</option>
					</select>
        </div>

				<div class="form-group input-group">
          <span class="input-group-addon">descripcion:</span>
          <input type="text" class="form-control" name="descripcion"/>
        </div>

        <div class="text-center">
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </div>
      </form>
      </div>
      <div class="clear">

      </div>
      <h3>Registros Anteriores</h3>
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
      </table>
    </div>
  </body>
</html>
