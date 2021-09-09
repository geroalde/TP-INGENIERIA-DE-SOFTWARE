<?php 
$edad = $_POST['edad'];
$ciudad = $_POST['ciudad'];
$precios = $_POST['check'];
$comprar = $_POST['dos'];
if ($ciudad = 'r') {
    $ciudad = "Rosario";
}
elseif ($ciudad = 'v') {
    $ciudad = "Venado Tuerto";
}
elseif ($ciudad = 'm') {
    $ciudad = "Murphy";
}
else {
    $ciudad = "Casilda";
}
if ($_REQUEST['check']=="n") {
    $precios = "No, no viste mejores precios";
}
else {
    $precios = "Sí, sí viste mejores precios";
}
if ($_REQUEST['dos']=="si") {
    $comprar = "Sí, sí comprarías";
}
else {
    $comprar = "No, no comprarías";
}
if(isset($_POST['recomendado'])) {
    $recomendado = "Sí, llegaste por una recomendación";
}
else {
    $recomendado = "No, no llegaste por una recomendación";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>RESUMEN</title>
</head>
<body>
    <h1> Resumen de tus datos </h1>
    <?php echo "<p> Edad:  $edad años </p>"; ?><br>
    <?php echo "<p> Ciudad:  $ciudad  </p>"; ?> <br>
    <?php echo "<p> ¿Llegaste por una recomendación? <br> <br> $recomendado </p>"; ?> <br>
    <?php echo "<p> ¿Comprarias? <br> <br> $comprar </p>"; ?> <br>
    <?php echo "<p> ¿Viste mejores precios en otros lugares? <br> <br> $precios</p>"; ?> <br>
    <h2> Como reclamar tu cupón </h2>
    <p> Para reclamar tu cupón envíanos una captura de esta pestaña a este número de WhatsApp: +54911876121. Uno de nuestros operadores
        se pondrá en contacto contigo inmediatamente.
    </p> <br>
    <h3>Muchas gracias por confiar en nosotros!</h3>
</body>
</html>