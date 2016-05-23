      <?php include APP_PATH . '/views/partials/head.view.php' ?>
      <!-- Menu NAV -->
      <?php include APP_PATH . '/views/partials/header.view.php' ?>

      <!-- Contenido principal -->
      <div class="container" style="margin-top: 1em;">
        <h1>Producto</h1>
        <div class="row">
          <div class="col s12 m6">
            <img class="responsive-img" src="http://lorempixel.com/500/320">
          </div>        

          <div class="col s12 m6">
            <h3>Nombre producto</h3>
            <p class="card-panel indigo lighten-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, iste! Nam quibusdam distinctio cupiditate fuga voluptatibus optio! Nesciunt qui eius neque, doloribus suscipit assumenda tempore alias dolores, excepturi, ipsam sit.</p>

            
            <div class="row">
              <div class="col s12 m6">          
                <p class="card-panel deep-orange lighten-5">
                  Precio: 200 USD
                </p>
              </div>            
              <div class="col s12 m6">          
                <p class="card-panel grey lighten-4">
                  Categoría: Lo que sea
                </p>
              </div>
            </div>
       
            
          </div>

        </div>

        <div class="row">
          <div class="col s12 m5">
            <select>
              <option value="" disabled selected>Seleccione medio de pago</option>
              <option value="1">Tarjeta de credito</option>
              <option value="2">Tarjeta de debito</option>
              <option value="3">PayPal</option>
            </select>
            <label>Medio de pago</label>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <input class="btn waves-effect waves-light" type="submit" name="action" value="Cancelar">
            <input class="btn waves-effect waves-light" type="submit" name="action" value="Comprar">
          </div>
        </div>

      </div>


      <!-- Footer -->
      <?php include APP_PATH . '/views/partials/footer.view.php' ?>