<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Viestiseinä</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>addpost.php">Lisää viesti</a></li>
            <li><a href="<?php echo ROOT_URL; ?>register.php">Rekisteröidy</a></li>
            <li><a href="<?php echo ROOT_URL; ?>login.php">Kirjaudu</a></li>
            <li><a href="logout.php" class="nav-link">Kirjaudu ulos</a></li>

              <?php if (isset($_SESSION['email'])): ?>
          <li class="nav-item">
            <a href="addpost.php" class="nav-link">Lisää viesti</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">Kirjaudu ulos</a>
          </li>
        <?php endif; ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>