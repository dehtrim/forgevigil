<?php

  require_once("inc/config.php");

  $pageTitle = "Forge Vigil Core";

//  include(ROOT_PATH . 'inc/header.php');

?>

<html>
<head>
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/default.css" type="text/css">
  </head>
  <body>
    <header>
      <div id= "logo">
        <h1>Forge Vigil Core</h1>
        Server Managment without root access
      </div>

      <nav>
        <ul>
          <li><a href="<?php BASE_URL ?>" class="selected">Home</a></li>
          <li><a href="status.php">Status</a></li>
        </ul>
      </nav>
    </header>


      <div class="content">
        <?php
          Echo "Main Content here.";
          ?>
      </div>

      <footer>
        <div>
          <img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon">
          <img src="img/facebook-wrap.png" alt="Factbook Logo" class="social-icon">
          <p>&copy; 2014 Forge Vigil Core.</p>
        </div>
      </footer>



  </body>
</html>
