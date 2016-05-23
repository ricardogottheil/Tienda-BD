    <?php include APP_PATH . '/views/partials/head.view.php' ?>
    <!-- Menu NAV -->
    <?php include APP_PATH . '/views/partials/header.view.php' ?>

    <!-- Contenido principal -->
  	<div class="container" style="margin-top: 1em;">

	  <div class="row">
	    <h2>Registro de factura</h1>
	    <div class="col s12">
	      <div class="row" >
	        <div class="input-field col s12 m6">
	            <div class="input-field col s12 m6">
	              <input placeholder="Escriba la identificación" id="rep-contrasena" type="text" class="validate">
	              <label for="rep-contrasena">Id factura</label>
	            </div>
	          </div>
	        </div>

	        <div class="input-field col s12 m6">
	          <input  type="date" class="datepicker" id="fecha-compra">
	          <label for="fecha-compra">Seleccione su fecha de compra</label>
	        </div>

	        <div class="input-field col s12 m6">
	          <input  type="date" class="datepicker" id="fecha-entrega">
	          <label for="fecha-entrega">Seleccione su fecha de entrega</label>
	        </div>
	        <div class="input-field col s12 m6">
	          <select>
	            <option value="" disabled selected>Seleccione medio de pago</option>
	            <option value="1">Tarjeta de credito</option>
	            <option value="2">Tarjeta de debito</option>
	            <option value="3">PayPal</option>
	          </select>
	          <label>Medio de pago</label>
	        </div>

	        <div class="col s12">
	          <input class="btn waves-effect waves-light" type="submit" name="action" value="Cancelar">
	          <input class="btn waves-effect waves-light" type="submit" name="action" value="Enviar">
	        </div>

	      </div>
	    </div>

	  </div>
	</div>
    <!-- Footer -->
    <?php include APP_PATH . '/views/partials/footer.view.php' ?>