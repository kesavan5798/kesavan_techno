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
  <div class="row">
    @if($product)
    @foreach($product as $value)
    <div class="col-md-4">
      <img src="{{$value['images']}}" alt="" style="width: 100%;">
      <h4>{{$value['product_name']}}</h4>
      <p>{{$value['product_description']}}</p>
      <p>Rs.{{$value['amount']}}</p>
      <p>Stock :{{$value['inventory_details']['stock']}}</p>
      <a href="{{ route('order.details', $value['id']) }}">Order Now</a>
    </div>
    @endforeach
    @endif
  </div>
</div>

</body>
</html>