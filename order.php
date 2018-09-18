<?php
    $name = $_GET["name"];
    $street_address = $_GET["address"];
    $apt = $_GET["apt"];
    $city = $_GET["city"];
    $state = $_GET["state"];
    $zip = $_GET["zip"];
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $shipping_price = calculateShipping($weight, $distance);

    function calculateShipping($weight, $distance)
    {
        $cost = 0;
        if ($weight && $distance) { $cost = round(($weight / 20) + ($distance / 20)); }
        return $cost;
    }
?>

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
    <h1>Sample Order</h1>
    <h2>Order Details:</h2>
    <p>Thank you for placing your order. Your order details are listed below:</p>
    <p>
      Name: <?php echo $name ?><br/>
      Street Address: <?php echo $street_address ?><br/>
      Apt/Unit: <?php echo $apt ?><br/>
      City: <?php echo $city ?><br/>
      State: <?php echo $state ?>
    </p>
    <p>Shipping Price: <span class="bold-text">$<?php echo $shipping_price ?></span>
    <hr/>
    <a href="index.php">Home</a>
  </div>
</body>
</html>