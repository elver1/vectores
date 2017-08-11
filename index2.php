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
        <h3>Resuelva un algoritmo que solicite dos numeros a y b y realice las operaciones</h3>
        <h4>a*b &nbsp; b*a &nbsp; a-b &nbsp; b-a &nbsp; a/b &nbsp; b/a &nbsp; a%b &nbsp; b%a</h4>
    <form  method="post">
      <label><h6>Nota 1:</h6></label>
      <input type="text" name="n1" value="" required > <br>
      <label><h6>Nota 2:</h6></label>
      <input type="text" name="n2" value="" required ><br>
      <input type="submit" name="" value="Enviar">

    </form>
    <hr>
    <?php
    $a[]=$_POST['n1'];
    $a[]=$_POST['n2'];

    echo "<h6>Nota 1: $a[0]</h6>";
    echo "<h6>Nota 2: $a[1]</h6>";
    $b[]=$a[0]*$a[1];
    $b[]=$a[1]*$a[0];
    $b[]=$a[0]-$a[1];
    $b[]=$a[1]-$a[0];
    $b[]=$a[0]/$a[1];
    $b[]=$a[1]/$a[0];
    $b[]=$a[0]%$a[1];
    $b[]=$a[1]%$a[0];
    echo "<h5>La multiplicacion de $a[0] x $a[1] es: $b[0]</h5>";
    echo "<h5>La multiplicacion de $a[1] x $a[0] es: $b[1]</h5>";
    echo "<h5>La resta de $a[0] - $a[1] es: $b[2]</h5>";
    echo "<h5>La resta de $a[1] - $a[0] es: $b[3]</h5>";
    echo "<h5>La divicion de $a[0] / $a[1] es: $b[4]</h5>";
    echo "<h5>La divicion de $a[1] / $a[0] es: $b[5]</h5>";
    echo "<h5>El modulo de $a[0] % $a[1] es: $b[6]</h5>";
    echo "<h5>El modulo de $a[1] % $a[0] es: $b[7]</h5>";
     ?>
  </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
