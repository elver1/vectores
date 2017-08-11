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
        <h3>Realize un algoritmo que calcule el promedio de tres notas </h3>
    <form  method="post">
      <label><h6>Nota 1:</h6></label>
      <input type="text" name="n1" value="" required> <br>
      <label><h6>Nota 2:</h6></label>
      <input type="text" name="n2" value="" required><br>
      <label><h6>Nota 3:</h6></label>
      <input type="text" name="n3" value="" required><br>
      <input type="submit" name="" value="Enviar">

    </form>
    <hr>
    <?php
    $a[]=$_POST['n1'];
    $a[]=$_POST['n2'];
    $a[]=$_POST['n3'];
    echo "<h6>Nota 1: $a[0]</h6>";
    echo "<h6>Nota 2: $a[1]</h6>";
    echo "<h6>Nota 3: $a[2]</h6>";
    $s[]=($a[0]+$a[1]+$a[2])/3;
    echo "<h4>El pormedio de las notas es de: $s[0]";
     ?>
  </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
