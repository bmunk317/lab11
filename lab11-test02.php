<?php
include 'lab11-test02inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  
    <title>Lab 11</title>   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">    
    <link rel="stylesheet" href="css/lab11-test02.css">
</head>
<body>
<main class="container">
    <div class="grid-container">
        
            <?php 
            generateBox("Starter", "1");
            generateBox("Developer", "3");
            generateBox("Professional", "10");
            generateBox("Enterprise", "50");
            ?>
    </div>
</main>   
</body>
</html>