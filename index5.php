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
      <h4>Algoritmo que calcule el area del circulo y lo mueste en pantalla</h4>
    <form  method="post">
      <label><h6>Radio</h6></label>
      <input type="text" name="n1" value="">
      <input type="submit" name="" value="Enviar">

    </form>
    <hr>
    <?php
    $a[]=$_POST['n1'];
    $pi[]=3.14;
    $b[]=$pi[0]*($a[0]*$a[0]);
    echo "<h6>Numero ingresado: $a[0]</h6>";
    echo "<h6>El area del circulo es: $b[0]</h6>";

     ?>
  </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
