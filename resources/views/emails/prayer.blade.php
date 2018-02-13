<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>El correo enviado fue</h2>
<br/>
<h3>Peticion de oracion</h3>
<h3>Nombre</h3>
{{ $prayer->nombre }}
<h3>Telefono</h3>
{{ $prayer->telefono }}
<h3>Nombre</h3>
{{ $prayer->email }}
<h3>Mensaje</h3>
{{ $prayer->mensaje }}
<h3>Fecha de envio</h3>
{{ $prayer->created_at }}

</body>
 
</html>
 