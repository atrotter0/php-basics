<?php
    $sentence_one = $_GET["sentence_one"];
    $sentence_two = $_GET["sentence_two"];
    $sentence_three = $_GET["sentence_three"];
    $phrases = array($sentence_one, $sentence_two, $sentence_three);
    $encrypted = encrypt($phrases);
    
    function encrypt($phrases_array)
    {
        $encrypted_phrase = "No input from user.";
        foreach ($phrases_array as $phrase) {
            $phrase = strrev($phrase);
            $phrase = strtoupper($phrase);
            $encrypted_phrase = $encrypted_phrase . $phrase;
        }
        return $encrypted_phrase;
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Basics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- remove styles link for Bootstrap 3.3.7 and uncomment below if you want to use Bootstrap 4.0.0 -->
  <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
</head>
<body>
  <div class="container">
    <h1>Encrypted Phrases:</h1>
    <p><?php echo $encrypted ?></p>
    <hr/>
    <a href="index.php">Home</a>
  </div>
</body>
</html>