<?php
session_start();
?>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<title>Formulario</title>
</head>
<body>
<h1>Formulario</h1>

<form class="" action="formulario.php" method="post">
<div class="nombre">
<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-label="First name">
</div>

<div class="apellido">
<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" aria-label="Last name">
</div>

 <div class="form-outline mb-4">
<input type="date" name="fenac" id="fenac" class="form-control" data-date-format="DD/MMM/YYY"/>
<label class="form-label" for="form4Example3">Fecha de Nacimiento</label></div>
<button type="submit" class="btn btn-primary">Enviar</button>
<button type="submit" class="btn btn-primary">Cerrar Sesión</button>
  </div>
</div>
</form>

<pre>
<?php
//session_start();
$_SESSION['personas']=$_POST;
if ($_POST['nombre']!=="") {
array_push($_SESSION['personas'], $_POST['nombre']);
}

if ($_POST['apellido']!=="") {
array_push($_SESSION['personas'], $_POST['apellido']);
}

//$nfecha=date_parse($_POST['fenac']);
//if ($nfecha['error_count'] )
//{
     
//array_push($_SESSION['personas'],$_POST['nfecha']);
//}

print_r($_SESSION);
?>
</pre>S
</body>
</html>