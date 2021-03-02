<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foods</title>
</head>
<body>
<h1>Foods</h1>
<?php
// get selected option
$cuisineId = $_POST['cuisineId'];
//connect
$db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');
// query
$sql = "SELECT * FROM cuisines WHERE cuisineId = :cuisineId";
$cmd = $db->prepare($sql);
$cmd->bindParam(':cuisineId', $cuisintId, PDO::PARAM_INT);
//execute the query
$cmd->execute();
$cuisine = $cmd->fetch();
//display the record
echo '<h2> Cuisine: '. $cuisineId. '</h2>';
//disconnect
$db = null;
?>
</body>
</html>