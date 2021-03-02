<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Cuisine</title>
</head>
<body>
<form method = 'post' action="'foods.php">
    <fieldset>
        <label for ="cuisineId"> Select a Cuisine</label>
        <select name ="cuisineId" id="cuisineId">
<?php
//connect
$db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');
//query
$sql = "SELECT cuisineId, name FROM cuisines";
//command, execute query, store results
$cmd = $db->prepare($sql);
$cmd->execute();
$cuisines =$cmd->fetchAll();
//gather cuisines
foreach ($cuisines as $cuisine){
    echo'<option value="'.$cuisine['cuisineId'].'">'.$cuisine['name']. '</option>';
}
//disconnect
$db = null;
?>
        </select>
    </fieldset>
</body>
</html>