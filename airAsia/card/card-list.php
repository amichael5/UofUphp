<html>
	<head>
		<title>AirAsia</title>
	
        <link rel="stylesheet" 		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <link 		rel="stylesheet" href="styles.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
<!-- Navbar -->
      
	<nav class="navbar navbar-default">
		  <div class="container">
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
          <li><a href="./card-add.php">Add New Card</a></li>
          <li><a href="./card-list.php">Gift Cards</a></li>
			  </ul>
			</div>
		  </div>
    </nav>
    
    <?php
    require_once  '../model/db_connect.php';

     //connect to db
      $conn = new mysqli($hn, $un, $pw, $db);
      if($conn->connect_error) die($conn->connect_error);

    	echo <<<_END
        <table>
          <tr>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card1<br>25</a></td>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card2<br>50</a></td> 
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card3<br>75</a></td>
          </tr>
          <tr>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card4<br>100</a></td>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card5<br>125</a></td>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card6<br>150</a></td>
          </tr>
          <tr>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card7<br>175</a></td>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card8<br>200</a></td>
            <td><a href="./card-details.php"><img src="/AirAsia/images/giftcard1.jpeg"><br>Card9<br>225</a></td>
          </tr>
        </table>  
    _END;  
    $conn->close();
		?>
  
	</body>
</html>