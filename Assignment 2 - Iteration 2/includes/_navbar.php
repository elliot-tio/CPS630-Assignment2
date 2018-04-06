<?php
echo '<div class="topnav">
        <a href="index.php">Home</a>
        <a href="#">About Us</a>
        <a href="#">Blog</a>
        <a href="#" id="amodal" onmousedown="myModal()"><img src=https://image.flaticon.com/icons/png/512/34/34627.png width="25" height="25"></a>
        <a href="#" class="pull-right" onmousedown="toggleBar()">Search</a>
        <div id="bar" class="search-bar" style="display:none;">
    			<form action= "results.php" method="post">
    				<input type="text" placeholder="Search.." name="in_search" autofocus>
    				<button type="submit" name="search"><img src="http://worldartsme.com/images/search-button-clipart-1.jpg" width=20; height=20;></button>
    			</form>
    		</div>
        <a href="maintain.php" class="pull-right">Maintain</a>
      </div><br></br>';
?>
