<!DOCTYPE html>
<html lang="en">
<head>
  <title>Techno</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
    @if($order_details)
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-4">
        <p>User Name: {{ $order_details['user_details']['name'] }}</p>
        <p>Email: {{ $order_details['user_details']['email'] }}</p>
        <p>Phone Number : {{ $order_details['user_details']['phone_number'] }}</p>
        <p>Product Name : {{ $order_details['product_details']['product_name'] }}</p>
        <p>Quantity : {{ $order_details['quantity'] }}</p>
        <p>Total Order {{ $order_details['total_amount']}}:</p>
      </div>
    </div>
    @endif
    <p>Thank you for place the order</p>
</div>

</body>
</html>