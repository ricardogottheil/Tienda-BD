    <?php include APP_PATH . '/views/partials/head.view.php' ?>
    <!-- Menu NAV -->
    <?php include APP_PATH . '/views/partials/header.view.php' ?>

    <!-- Contenedor principal  -->
    <div class="container" style="margin-top: 1em;">

      <div class="row">
        <h2>Registro de administrador</h1>
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
              <input placeholder="Escriba su Cargo" id="direccion" type="text" class="validate">
              <label for="direccion">Cargo</label>
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
    