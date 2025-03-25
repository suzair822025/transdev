<!DOCTYPE html>
<html>
<head>
    <title>New Order Received</title>
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
        <div class="header">New Order Received</div>
        <div class="content">
            <p>Dear Admin</p>
            <p>A new order has been placed. Here are the details:</p>
            <h3>Customer Information:</h3>
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
            
            <h3>Order Details:</h3>
            <p><strong>Service Type:</strong> {{ $data['service_type'] }} </p>
            <p><strong>Translate From:</strong> {{ $data['translate_from'] }} </p>
            <p><strong>Translate To:</strong> {{ $data['translate_to'] }} </p>
            <p><strong>Number of Pages:</strong> {{ $data['number_of_pages'] }} </p>
            <p><strong>Cost of Pages:</strong> ${{ $data['number_of_pages_amount'] }} </p>
            <p><strong>Estimated Delivery:</strong> {{ $data['estimated_delivery'] }} </p>
            <p><strong>Estimated Delivery Cost:</strong> ${{ $data['estimated_delivery_amount'] }} </p>
            <p><strong>Total Amount:</strong> ${{ $data['total_amount'] }}</p>
            
            <h3>Payment Information:</h3>
            <p><strong>Transaction ID:</strong> {{ $data['transaction_id'] }} </p>
            <p><strong>Paid Amount:</strong> ${{ $data['amount'] }} ({{ $data['currency'] }})</p>
            <p><strong>Payment Date:</strong> {{ $data['created_at'] }} </p>
            <p><strong>Transaction Status:</strong> {{ $data['status'] }} </p>
            
            
            
        </div>
        <div class="footer">
            <p>Thanks</p>
        </div>
    </div>
</body>
</html>
