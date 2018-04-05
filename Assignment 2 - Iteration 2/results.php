<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Art Gallery</title>
  <link rel="stylesheet" href="Assignment2-team20.css">
</head>

<body>

  <h1>Art Gallery Home</h1>
  <div id="nav">
    <?php include "includes/_navbar.php";?>
  </div>

  <div id="shopping_cart">
    <?php include "includes/_shopping_cart.php";?>
  </div>

  <div class="val">
    <p><strong>Results:</strong></p>
    <?php include "includes/_search.php"; ?>
  </div>

  <div class="container">
    <?php include "includes/_footer.php";?>
  </div>

  <script type="text/javascript" src="Assignment2-team20.js" charset="utf-8"></script>
</body>

</html>
