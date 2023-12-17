 <?php
 require_once 'asset\config\db.php'; 
 $country = intval($_GET['country']);

$query  = "SELECT id, city_name FROM city WHERE state_id='$country'";
$result = mysqli_query($conn, $query);
?>
<select name="city" onchange="getCity(<?php echo $country?>,this.value)">
	<option>Select State</option>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['id']?>><?php echo $row['city_name']?></option>
	<?php } ?>
</select>
