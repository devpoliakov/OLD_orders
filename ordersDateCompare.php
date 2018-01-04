<?php



function isOrderOld($orderDate, $daysForCompare){

// multiple days to seconds
foreach ($daysForCompare as $key => $value) {
	$daysForCompare[$key] = $value * 24 * 60 * 60;
}

// get order item time
$d = new DateTime($orderDate[0], new DateTimeZone('Europe/Rome'));
// compare with current time
$timeForCompare = time() - $d->getTimestamp();

   if ($timeForCompare < $daysForCompare[0]){
   	echo 'all is fine';
   } else if ($timeForCompare < $daysForCompare[1]){
   	echo 'Notice please';
   } else if ($timeForCompare < $daysForCompare[2]){
   	echo 'wake up man!!!!';
   }
}


// write Your days
$daysForCompare = array(1,3,7);

$orderItem = array('2018-01-01 11:00:00', 777);
$orderItem2 = array('2018-01-03 11:00:00', 777);
$orderItem3 = array('2018-01-05 11:00:00', 777);

echo $orderItem[0] . '<br>';
isOrderOld($orderItem, $daysForCompare);
echo  '<br><br>';

echo $orderItem2[0] . '<br>';
isOrderOld($orderItem2, $daysForCompare);
echo  '<br><br>';

echo $orderItem3[0] . '<br>';
isOrderOld($orderItem3, $daysForCompare);
