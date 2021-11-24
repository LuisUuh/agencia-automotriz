<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body style="font-family: sans-serif;">
    <div style="display: block; margin: auto; max-width: 600px;" class="main">
      <h1 style="font-size: 18px; font-weight: bold; margin-top: 20px">Solicitud de Información!</h1>
      <p> <strong>Nombre:</strong> {{ $contact['name'] }} </p>
      <p> <strong>Apellido:</strong> {{ $contact['lastName'] }} </p>
      <p> <strong>Correo:</strong> {{ $contact['email'] }} </p>
      <p> <strong>Telefono:</strong> {{ $contact['phone'] }} </p>
      <p> <strong>Mensaje:</strong> {{ $contact['message'] }} </p>

      <p>Inspect it using the tabs you see above and learn how this email can be improved.</p>
    </div>
</body>
  </html>