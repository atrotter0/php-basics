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
    <h1>Encryption Form</h1>
    <div>
      <form action="encryption.php">
        <div class="form-group">
          <label for="sentence_one">Enter your first sentence:</label>
          <input type="text" name="sentence_one" class="form-control">
        </div>
        <div class="form-group">
          <label for="sentence_two">Enter a second sentence:</label>
          <input type="text" name="sentence_two" class="form-control">
        </div>
        <div class="form-group">
          <label for="sentence_three">Enter a third sentence:</label>
          <input type="text" name="sentence_three" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Encrypt</button>
        <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
      </form>
    </div>
  </div>
</body>
</html>