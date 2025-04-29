<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Solicitud de Cotización de Traducción Recibida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            color: #333333;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        .header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #999999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <p>Estimado/a {{ $data['name'] ?? 'Cliente' }},</p>

            <p>Gracias por solicitar una cotización de traducción. Hemos recibido su solicitud exitosamente.</p>

            <p>Uno de nuestros agentes de traducción se pondrá en contacto con usted lo antes posible para seguir con los detalles.</p>

            <p>Si tiene alguna pregunta mientras tanto, no dude en comunicarse con nosotros.</p>

            <p>Atentamente,<br>
            Equipo de Translationwindows.com</p>
        </div>
    </div>
</body>
</html>
