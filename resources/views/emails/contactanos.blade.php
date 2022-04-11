<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Correo</title>
</head>
<body style="background-color: #504dfc">

<!--Copia desde aquí-->
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
	<tr>
		<td style="background-color: #ecf0f1; text-align: left; padding: 0">
			
                
                    <img src='https://i.postimg.cc/T1J0hFRh/ebook.png' border='0' alt=''/>
                
			
		</td>
	</tr>

	<tr>
		<td style="padding: 0; ">
			<p style="text-align: center; color: white; font-family: sans-serif;">hotmart.arling.pro</p>
		</td>
	</tr>
	
	<tr>
		<td style="background-color: #ecf0f1">
			<div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
				<h2 style="color: #504dfc; margin: 0 0 7px">Nuevo Registro</h2>
				<p style="margin: 2px; font-size: 15px">
					{{$contacto['name']}}, se registró en la página web. Contáctalo ahora.! 
				</p>
				<ul style="font-size: 15px;  margin: 10px 0; text-decoration: none; ">
					<li style="list-style:none; "><strong>Nombre:</strong> {{$contacto['name']}}</li>
                    <li style="list-style:none; "><strong>Correo:</strong> <a href="mailto:{{$contacto['email']}}">{{$contacto['email']}}</a></li>
                  
                    <li style="list-style:none; "><strong>Ciudad:</strong> {{$contacto['city']}}</li>
                    <li style="list-style:none; "><strong>Pais:</strong> {{$contacto['country']}}</li>
                    <li style="list-style:none; "><strong>Ip Pública:</strong> {{$contacto['ip']}}</li>
                    <li style="list-style:none; "><strong>Distancia:</strong> {{$contacto['radio']}}</li>
                    

				</ul>
			
				<div style="margin: 30px 0 0; width: 100%; text-align: center; ">
					<a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #504dfc" href="https://hotmart.arling.pro/admin/">Dashboard</a>	
				</div>
				<p style="color: #b3b3b3; font-size: 10px; text-align: center;margin: 30px 0 0">Arling 2010 - {{ date('Y') }} - Desarrollado por <a href="https://arling.pro" target="_blank">Arling Holguin</a></p>
			</div>
		</td>
	</tr>
</table>
<!--hasta aquí-->

</body>
</html>
    
