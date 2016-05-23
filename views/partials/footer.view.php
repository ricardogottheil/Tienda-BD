<footer class="page-footer orange darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2016 copyright
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
</footer>

<!-- Javascript -->
<script src="<?= PUBLIC_PATH ?>/js/jquery-2.2.3.min.js"></script>
<script src="<?= PUBLIC_PATH ?>/js/bin/materialize.min.js"></script>
<script>
  $(document).ready(function(){
      $(".button-collapse").sideNav();
      $('.slider').slider({full_width: true, indicators: false, interval: 7000});
  });
</script>
</body>
</html>