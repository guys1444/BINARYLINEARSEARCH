<?php
 
$myArray = ["orange", "lemon", "pear", "apple", "lime"];
 
print(linearSearch($myArray, "kiwi"));
 
function linearSearch($array, $toFind) {
	foreach ($array as $key=>$val) {
		if ($val == $toFind) {
			return $key;
		}
	}
	return -1;
}
 
?>

אלגוריתם חיפוש לינארי

התוכנה מבצעת חיפוש לינארי בקו ישר על המערך הלא ממויין 

אם התוכנית מוצאת את המילה במערך היא מחזירה אותה 
אם לא היא מחזירה ערך -1
