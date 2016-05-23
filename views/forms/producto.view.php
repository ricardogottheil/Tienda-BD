    <?php include APP_PATH . '/views/partials/head.view.php' ?>
    <!-- Menu NAV -->
    <?php include APP_PATH . '/views/partials/header.view.php' ?>

    <!-- Contenido principal -->
    <div class="container" style="margin-top: 1em;">

      <div class="row">
        <h2>Registro de producto</h1>
        <div class="col s12">
          <div class="row" >
            <div class="input-field col s12 m6">
                <div class="input-field col s12 m6">
                  <input placeholder="Escriba la identificacion" id="rep-contrasena" type="text" class="validate">
                  <label for="rep-contrasena">Id producto</label>
                </div>
              </div>
            </div>

            <div class="input-field col s12 m6">
              <input placeholder="Escriba su cantidad" id="direccion" type="text" class="validate">
              <label for="direccion">Cantidad</label>
            </div>

            <div class="input-field col s12 m6">
              <input placeholder="Escriba su precio" id="direccion" type="text" class="validate">
              <label for="direccion">Precio</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="  Nombre de el producto " id="direccion" type="text" class="validate">
              <label for="direccion">  Nombre</label>
            </div>
            <div class="input-field col s12 m6">
              <select>
                <option value="" disabled selected>Seleccione un disponibilidad</option>
                <option value="1">No disponible</option>
                <option value="2">Disponible</option>
              </select>
              <label>Disponibilidad</label>
            </div>

            <div class="input-field col s12 m6">
              <select>
                <option value="" disabled selected>Seleccione un catalogo</option>
                <option value="1">Tema catalogo 1</option>
                <option value="2">Tema catalogo  2</option>
                <option value="3">Tema catalogo 3</option>
              </select>
              <label>catalogo</label>
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