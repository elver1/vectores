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
        <h3>Realice un algoritmo que calcule el area de un triangulo</h3>

    <form  method="post">
      <label><h6>Base:</h6></label>
      <input type="text" name="n1" value="" required > <br>
      <label><h6>Altura:</h6></label>
      <input type="text" name="n2" value="" required ><br>
      <input type="submit" name="" value="Enviar">

    </form>
    <hr>
    <?php
    $a[]=$_POST['n1'];
    $a[]=$_POST['n2'];

    echo "<h6>Base: $a[0]</h6>";
    echo "<h6>Altura: $a[1]</h6>";
    $b[]=$a[0]*$a[1];

    echo "<h5>El area del trinagulo es de: $b[0]</h5>";

     ?>
  </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
