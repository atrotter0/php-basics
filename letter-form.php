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
    <h1>Letter To A Friend</h1>
    <div>
      <form action="letter.php">
        <div class="form-group">
          <label for="sender">Enter your name:</label>
          <input type="text" name="sender" class="form-control">
        </div>
        <div class="form-group">
          <label for="recipient">Enter your friend's name:</label>
          <input type="text" name="recipient" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Send Letter</button>
        <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
      </form>
    </div>
  </div>
</body>
</html>