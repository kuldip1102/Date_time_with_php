<?php

// $date = new DateTime();
$dateString = '2016-11-16';

$date = DateTime::createFromFormat('Y-m-d',$dateString);
// echo $date->format('dS M Y ');



// get the timestamp;
// echo $date->gettimestamp();

//get the timezone of the current server.
 
echo $date->format('dS M Y');
 // var_dump($date);


// ***** set the timestamp ******// 
$date1 = (new DateTime())->setTimestamp('627212738');

echo $date1->format('dS M Y'); 

?>
<br>
<br>
<br>


<?php
// set Time and Date;
$date2 = new DateTime;

$date2->setDate (2016, 12, 18);
$date2->setTime(12, 30, 00);

var_dump($date2);
?>