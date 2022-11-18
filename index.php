<?php

$now = time(); // or your date as well
$your_date = strtotime("2022-03-16");
$datediff = $your_date - $now;

$days = round($datediff / (60 * 60 * 24));
$quit = false;
if ($days <= 0) {
	$quit = true;
}

if ($quit) {
	print "<img src='/sad.png' />";
} else {
	print "<img src='/happy.png' />";
	print "<p>Emma har " . $days . " dagar kvar.</p>";
}



