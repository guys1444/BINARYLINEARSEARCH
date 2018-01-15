
<?php
 
$binaryArray = generateOrderedArray();
 
print(binarySearch($binaryArray, 640));
 
function binarySearch($array, $searchFor) {
	$low = 0;
	$high = count($array) - 1;
	$mid = 0;
 
	while ($low <= $high) { // While the high pointer is greater or equal to the low pointer
		$mid = floor(($low + $high) / 2);
		$element = $array[$mid];
 
		if ($searchFor == $element) { // If this is the value we're searching for
			return $mid;
		} else if ($searchFor < $element) {
			$high = $mid - 1;
		} else {
			$low = $mid + 1;
		}
	}
	return -1;
}
 
function generateOrderedArray() {
	$array = [];
 
	for ($i = 0; $i <= 99; $i++) {
		$array[$i] = $i * 10;
	}
	return $array;
}

אלגוריתם חיפוש בינרי PHP
חיפוש בינארי  הוא אלגוריתם לחיפוש, כלומר למציאת מקומו של איבר במערך ממוין.

	עקרון[]
נבדוק את האיבר האמצעי שבמערך הנתון (הממוין כך שהאיבר השמאלי ביותר בו הוא הקטן ביותר, והאיבר הימני ביותר הוא הגדול ביותר במערך). אם האיבר האמצעי הוא האיבר המבוקש, הרי מצאנו את שחיפשנו ונסיים כאן. אם לא, נבדוק מה יחס הסדר בין האיברים. אם האיבר המבוקש קטן יותר מאיבר זה, 
נבחר את חציו השמאלי של המערך (שבו כל האיברים הקטנים מהאיבר האמצעי). אם האיבר המבוקש גדול יותר, נבחר את חציו הימני של המערך (שבו כל האיברים הגדולים מהאיבר האמצעי).
	כעת נחזור על כל מה שעשינו עם תת-המערך שבחרנו. במקרה הגרוע ביותר, שבו באף אחד מהמקרים לא היה האיבר האמצעי האיבר אותו אנו מבקשים,
נגיע לתת-מערך בעל איבר אחד, שהוא האיבר המבוקש (או שנגיע למסקנה שהאיבר המבוקש כלל אינו נמצא במערך).
	
	
