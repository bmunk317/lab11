<html>
<head>
<title>Lab 11</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">  
<link rel="stylesheet" href="css/lab11-ex03.css">    
</head>
<body>
<h1>Age calculator 
<?php
$birthday = mktime(0,0,0,1,15,2004); //Jan 15, 2014 00:00:00
$today = time(); // current time in seconds since 1970.
$secondsOld = $today - $birthday;

echo "<p>Time elapsed since " . date("M d, Y",$birthday) . ":</p>";
echo $secondsOld;
?>
</h1>

<ul>
   <li><?php  echo $secondsOld; ?> seconds, or </li>
   <li><?php  echo number_format($secondsOld/(60*60*24), 2, ',', ''); ?> days, or </li>
   <li><?php  echo number_format($secondsOld/(60*60*24*30), 2, ',', ''); ?> months, or </li>
   <li><?php  echo number_format($secondsOld/(60*60*24*365), 2, ',', ''); ?> years</li>
</ul>
</body>
</html>
