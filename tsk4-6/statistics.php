<?php
    $lengCount=array_fill(0,11,0);
    $conn = new mysqli("localhost", "u67295", "9463358", "u67295");
    if($conn->connect_error){
         die("Ошибка: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM newUser_lengs";
    if($result = $conn->query($sql)){
        foreach($result as $row){
            $lengCount[$row["leng_id"]]+=1;
        }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link rel="stylesheet" href="statStyle.css">
</head>
<body>
    <div class="len">
        <p class="text">Pascal: <?php echo $lengCount[0]; ?></p>
        <p class="text">C: <?php echo $lengCount[1]; ?></p>
        <p class="text">C++: <?php echo $lengCount[2]; ?></p>
        <p class="text">Java Script: <?php echo $lengCount[3]; ?></p>
        <p class="text">PHP: <?php echo $lengCount[4]; ?></p>
        <p class="text">Python: <?php echo $lengCount[5]; ?></p>
        <p class="text">Java: <?php echo $lengCount[6]; ?></p>
        <p class="text">Hask: <?php echo $lengCount[7]; ?></p>
        <p class="text">Clojure: <?php echo $lengCount[8]; ?></p>
        <p class="text">Prolog: <?php echo $lengCount[9]; ?></p>
        <p class="text">Scala: <?php echo $lengCount[10]; ?></p>
    </div>
    <div class="clouds">
        <img src="cloud.jpg">
        <img src="cloudT.jpg">
    </div>
</body>
