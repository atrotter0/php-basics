<!DOCTYPE html>
<html>
<head>
  <title>PHP Basics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
</head>
<body>
  <div class="container">
    <div class="container">
    <h1>Order Form:</h1>
    <h2>User Details</h2>
    <div>
      <form action="order.php">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Street Address:</label>
          <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="apt">Apt/Unit:</label>
          <input type="text" name="apt" class="form-control">
        </div>
        <div class="form-group">
          <label for="city">City:</label>
          <input type="text" name="city" class="form-control">
        </div>
        <div class="form-group">
          <label for="state">State:</label>
          <input type="text" name="state" class="form-control">
        </div>
        <h2>Product Details</h2>
        <div class="form-group">
          <label for="weight">Weight (lb):</label>
          <input type="number" name="weight" class="form-control">
        </div>
        <div class="form-group">
          <label for="distance">Distance (miles):</label>
          <input type="number" name="distance" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Place Order</button>
        <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
      </form>
    </div>
  </div>
  </div>
</body>
</html>