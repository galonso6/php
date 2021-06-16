<?php

$salario = $_GET['salario'] ?? '';
$cedula = $_GET['cedula'] ?? '';
$salud = $pension = $ARL = $fps = 0;
$porcentajeSalud = 0.04;
$porcentajePension = 0.04;
$porcentajeARL = 0.005;
$porcentajeFps = 0.01;
$smlv = 1014980;
$bono = 40000;




if ($salario) {
    $salud = $salario * $porcentajeSalud;
    $pension = $salario * $porcentajePension;
    $ARL = $salario * $porcentajeARL;
}

if ($salario > ($smlv * 4) ) {
   $fps = $salario * $porcentajeFps;
}

if ($salario <=($smlv * 2)) {
    $bono = $bono;
}else {
    $bono = 0;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    

    <title>Liquidación</title>
</head>
<body>
    <form action="">
    <label for="">Salario</label>
<input type="number" name="salario"> 
<br>
<label for="">Cédula</label> 
<input type="number" name="cedula">
<br>
<input type="submit" value="Enviar">
    </form>

    <table border="2" >
    
    <tr >
        <th>Cédula</th>
        <th>Salario</th>
        <th>Salud (4%)</th>
        <th>Pension(4%)</th>
        <th>ARL (0.5%)</th>
        <th>Fondo de pensión Solidaridad (1% > 4 SMLV)</th>
        <th>Bono (Salario inferior a 2 smlv</th>
    </tr>
    <tr>
        <td><?php echo $cedula; ?></td>
        <td><?php echo $salario; ?></td>
        <td><?php echo $salud; ?></td>
        <td><?php echo $pension; ?></td>
        <td><?php echo $ARL; ?></td>
        <td><?php echo $fps; ?></td>
        <td><?php echo $bono;?></td>
        </tr>
    </table>
</body>
</html>