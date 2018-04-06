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

  <div class="window-container">
    <div class="left-window" id="left-window">
      <?php include "includes/_dropdowns.php";?>
    </div>
    <div class="middle-window" id="middle-window">
      <?php include "includes/_selected_artwork_image.php";?>
    </div>
    <div class="right-window" id="right-window">
      <?php include "includes/_selected_artwork_info.php";?>
    </div>
  </div>

  <div class="container">
    <?php include "includes/_footer.php";?>
  </div>

  <script type="text/javascript" src="Assignment2-team20.js" charset="utf-8"></script>
</body>

</html>
