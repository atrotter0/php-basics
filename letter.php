<?php
    $friend_name = $_GET["recipient"];
    $my_name = $_GET["sender"];
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
    <h1>Sample Letter To A Friend</h1>
    <h2></h2>
    <p>Dear <?php echo $friend_name ?>,</p>
    <p>How are you? I hope you are having a nice weekend. I'm vacationing in Tibet while I learn programming!</p>
    <p><?php echo $friend_name ?>, you would not believe how cold it is here! I should not have been in such a rush to train in the mountains!</p>
    <p>Looking forward to seeing you soon, I'll bring back a souvenir. Maybe something from the League of Shadows!</p>
    <p>Cheers,</p>
    <p><?php echo $my_name ?></p>
    <hr/>
    <a href="index.php">Home</a>
  </div>
</body>
</html>