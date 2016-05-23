    <?php include APP_PATH . '/views/partials/head.view.php' ?>
    <!-- Menu NAV -->
    <?php include APP_PATH . '/views/partials/header.view.php' ?>

    <!-- Contenido principal -->
          <div class="container" style="margin-top: 1em;">

          <div class="row">
            <h2>Registro cliente</h1>
            <div class="col s12">
              <div class="row" >
                <div class="input-field col s12 m6">
                  <input placeholder="Escriba su nombre" id="nombre" type="text" class="validate">
                  <label for="nombre">Nombre</label>
                </div>

                <div class="input-field col s12 m6">
                  <input placeholder="Escriba su apellido" id="apellido" type="text" class="validate">
                  <label for="apellido">Apellido</label>
                </div>

                <div class="input-field col s12 m6">
                  <input placeholder="Escriba su correo electronico" id="correo" type="email" class="validate">
                  <label for="correo">Correo electronico</label>
                </div>
                <div class="row">
                  <div class="col s12">
                    <div class="input-field col s12 m6">
                      <input placeholder="Escriba su contraseña" id="contrasena" type="password" class="validate">
                      <label for="contrasena">Contraseña</label>
                    </div>

                    <div class="input-field col s12 m6">
                      <input placeholder="Escriba su contraseña" id="rep-contrasena" type="password" class="validate">
                      <label for="rep-contrasena">Repetir contraseña</label>
                    </div>
                  </div>
                </div>

                <div class="input-field col s12 m6">
                  <input placeholder="Escriba su dirección" id="direccion" type="text" class="validate">
                  <label for="direccion">Direccion</label>
                </div>

                <div class="input-field col s12 m6">
                  <input placeholder="Seleccione su fecha de nacimiento" type="date" class="datepicker" id="datepicker">
                  <label for="datepicker">Fecha de nacimiento</label>
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

                <div class="input-field col s12 m6">
                  <select>
                    <option value="" disabled selected>Seleccione un país</option>
                    <option value="1">Pais 1</option>
                    <option value="2">Pais 2</option>
                    <option value="3">Pais 3</option>
                  </select>
                  <label>País</label>
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