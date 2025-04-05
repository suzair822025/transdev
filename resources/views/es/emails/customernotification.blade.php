<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
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
        <div class="header">Your Order Placed Successfully</div>
        <div class="content">
            <p>Dear {{ $data['name'] }}</p>
            <p>Thank you for your order! Here are your order details:</p>
            
            
            <h3>Order Details:</h3>
            <p><strong>Service Type:</strong> {{ $data['service_type'] }} </p>
            <p><strong>Translate From:</strong> {{ $data['translate_from'] }} </p>
            <p><strong>Translate To:</strong> {{ $data['translate_to'] }} </p>
            <p><strong>Number of Pages:</strong> {{ $data['number_of_pages'] }} </p>
            <p><strong>Cost of Pages:</strong> ${{ $data['number_of_pages_amount'] }} </p>
            <p><strong>Estimated Delivery:</strong> {{ $data['estimated_delivery'] }} </p>
            <p><strong>Estimated Delivery Cost:</strong> ${{ $data['estimated_delivery_amount'] }} </p>
            <p><strong>Total Amount:</strong> ${{ $data['total_amount'] }}</p>
            
            
            
        </div>
        <div class="footer">
            <p>Thanks</p>
        </div>
    </div>
</body>
</html>
