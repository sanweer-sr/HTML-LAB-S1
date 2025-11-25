<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>

<center>
<h1>Electricity Bill Calculator</h1>

<form action="" method="POST">
    <label for="unit">Enter Units consumed:</label>
    <input type="number" name="unit" min="0" required>
    <button type="submit">Calculate</button>
</form>


</center>

</body>
</html>


<?php
	
	echo "<center>";
    $unit = $_POST['unit'];

    echo "<h2>Electricity Cost Results</h2>";
    echo "Units used: $unit UNIT<br>";

	if($unit<=150){
		$rate = 5.10;  
		$bill = $unit * $rate;
	}
	elseif ($unit<=300&&$unit>150){
		$rate = 6.40;  
		$bill = $unit * $rate;
	}
	
	elseif ($unit<=500&&$unit>300){
		$rate = 7.90;  
		$bill = $unit * $rate;
	}
	
	else{
		$rate = 8.8;  
		$bill = $unit * $rate;
	}
    
	echo "<span style='color: green;'>Amount payable: $bill</span>";

?>
