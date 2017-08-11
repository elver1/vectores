<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>Vectores</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div class="container">
      <h4>Algoritmo que calcule al area de un rectangulo y lo muestre en pantalla</h4>
    <form  method="post">
      <label><h6>Base</h6></label>
      <input type="text" name="n1" value="" required>
      <label>Altura</label>
      <input type="text" name="n2" value="" required>
      <input type="submit" name="" value="Enviar">

    </form>
    <hr>
    <?php
    $a[]=$_POST['n1'];
    $a[]=$_POST['n2'];
    $b[]=$a[0]*$a[1];
    echo "<h6>Base: $a[0]";
    echo "<h6>Altura: $a[1]";
    echo "<h5>El area del rectangulo es: $b[0]</h5>";
    ?>
  </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
