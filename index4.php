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
        <h4>Calcular la paga de un tarbajador conociendo el numero de horas trabajadas, la tarifa horaria y la tasa de impuesto</h4>

    <form  method="post">
      <label><h6>Horas</h6></label>
      <input type="text" name="n1" value="" required > <br>
      <label><h6>Tarifa</h6></label>
      <input type="text" name="n2" value="" required ><br>
      <label><h6>Impuesto</h6></label>
      <input type="text" name="n3" value="" required><br>
      <input type="submit" name="" value="Enviar">

    </form>
    <hr>
    <?php
    $a[]=$_POST['n1'];
    $a[]=$_POST['n2'];
    $a[]=$_POST['n3']/100;
    $b[]=$a[0]*$a[1];
    $b[]=$b[0]*$a[2];
    $b[]=$b[0]-$b[1];

    echo "<h6>Horas: $a[0]</h6>";
    echo "<h6>tarifa: $a[1]</h6>";
    echo "<h6>impuesto: $a[2]</h5>";
    echo "<h6>Total de plata: $b[0]";
    echo "<h6>Impuesto a pagar: $b[1]</h6>";
    echo "<h6>Toatl a recibir: $b[2]";
     ?>
  </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
