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
        <div class="header">New Quote Request Received</div>
        <div class="content">
            <p>Dear Admin</p>
            <p>A new Quote Request has been placed. Here are the details:</p>
            <h3>Customer Information:</h3>
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
            
            <h3>Order Details:</h3>
            <p><strong>Service Type:</strong> {{ $data['service_type'] }} </p>
            @if($data['translation_type_id'] > 0)
            <p><strong>Translation Type:</strong> {{ $data['translation_type'] }} </p>
            @endif
            @if($data['file_type_id'] > 0)
            <p><strong>File Type:</strong> {{ $data['file_type'] }} </p>
            @endif
            @if(!empty($data['translate_from']))
            <p><strong>Translate From:</strong> {{ $data['translate_from'] }} </p>
            @endif
            <p><strong>Translate To:</strong> {{ $data['translate_to'] }} </p>
            
            @if($data['number_of_pages'] > 0)
            <p><strong>Number of Pages:</strong> {{ $data['number_of_pages'] }} </p>
            <p><strong>Cost of Pages:</strong> ${{ $data['number_of_pages_amount'] }} </p>
            @endif
            @if($data['number_of_minutes'] > 0)
            <p><strong>Number of Minutes:</strong> {{ $data['number_of_minutes'] }} </p>
            <p><strong>Cost of Minutes:</strong> ${{ $data['number_of_minute_amount'] }} </p>
            @endif
            @if($data['number_of_words'] > 0)
            <p><strong>Number of Words:</strong> {{ $data['number_of_words'] }} </p>
            <p><strong>Cost of Words:</strong> ${{ $data['number_of_word_amount'] }} </p>
            @endif

            <p><strong>Estimated Delivery:</strong> {{ $data['estimated_delivery'] }} </p>
           
            <p><strong>Total Amount:</strong> ${{ $data['total_amount'] }}</p>
            
            <h3>Comments:</h3>
            {{ $data['comments'] }}
            
            
            
        </div>
        <div class="footer">
            <p>Thanks</p>
        </div>
    </div>
</body>
</html>
