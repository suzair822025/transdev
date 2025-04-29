<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Pedido</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 18px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; }
        .header { background-color: #f4f4f4; padding: 10px; text-align: center; font-size: 18px; font-weight: bold; }
        .content { padding: 20px; }
        .footer { text-align: center; margin-top: 20px; font-size: 18px; color: #666; }
        .button { background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; margin-top: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">¡Su pedido ha sido realizado con éxito!</div>
        <div class="content">
            <p>Estimado/a {{ $data['name'] }}</p>
            <p>¡Gracias por su pedido! Aquí están los detalles de su pedido:</p>
            
            <h3>Detalles del Pedido:</h3>
            <p><strong>Tipo de Servicio:</strong> {{ $data['service_type'] }} </p>
            @if($data['translation_type_id'] > 0)
            <p><strong>Tipo de Traducción:</strong> {{ $data['translation_type'] }} </p>
            @endif
            @if($data['file_type_id'] > 0)
            <p><strong>Tipo de Archivo:</strong> {{ $data['file_type'] }} </p>
            @endif
            
            @if(!empty($data['translate_from']))
            <p><strong>Traducir de:</strong> {{ $data['translate_from'] }} </p>
            @endif
            <p><strong>Traducir a:</strong> {{ $data['translate_to'] }} </p>
            @if($data['number_of_pages'] > 0)
            <p><strong>Número de Páginas:</strong> {{ $data['number_of_pages'] }} </p>
            <p><strong>Costo de las Páginas:</strong> ${{ $data['number_of_pages_amount'] }} </p>
            @endif
            @if($data['number_of_minutes'] > 0)
            <p><strong>Número de Minutos:</strong> {{ $data['number_of_minutes'] }} </p>
            <p><strong>Costo de los Minutos:</strong> ${{ $data['number_of_minute_amount'] }} </p>
            @endif
            @if($data['number_of_words'] > 0)
            <p><strong>Número de Palabras:</strong> {{ $data['number_of_words'] }} </p>
            <p><strong>Costo de las Palabras:</strong> ${{ $data['number_of_word_amount'] }} </p>
            @endif
            <p><strong>Entrega Estimada:</strong> {{ $data['estimated_delivery'] }} </p>
            
            <p><strong>Importe Total:</strong> ${{ $data['total_amount'] }}</p>
        </div>
        <div class="footer">
            <p>Gracias</p>
        </div>
    </div>
</body>
</html>
