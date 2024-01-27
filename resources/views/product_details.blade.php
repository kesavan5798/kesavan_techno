<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>{{$product_details['product_name']}}</h2>

  <form action="{{ route('order.now') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{$product_details['id']}}">
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-2">
        <label for="name">Name:</label>
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-2">
        <label for="email">Email:</label>
      </div>
      <div class="col-md-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-2">
        <label for="phone">Phone Numer:</label>
      </div>
      <div class="col-md-4">
        <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
      </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-2">
        <label for="quantity">No Quantity:</label>
      </div>
      <div class="col-md-4">
        <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
      </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
      
      <div class="col-md-4">
        <p>Product Amount: <span id="product_amount1"></span></p>
        <p>Quantity: <span id="quantity_1"></span></p>
        <p>Total: <span id="total"></span></p>
      </div>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<script type="text/javascript">
    $("#quantity").keyup(function () {
      var product_amount = "{{$product_details['amount'] ?? ''}}";
      var quantity = $("#quantity").val();
      var total_price = 0;
      // alert(quantity);
      if (quantity) {
        total_price = quantity * product_amount;
      }
      $("#product_amount1").html(product_amount);
      $("#quantity_1").html(quantity);
      $("#total").html(total_price);

    });
</script>
</body>
</html>
