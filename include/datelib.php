<?php
// Last update: 2016-05-21

define("DATE_IN_PAST", 	"");

/**
 * @return boolean
 */function isDatumInHetVerleden($datum) {
	if ($datum == DATE_IN_PAST) { return true; }
	return false;
}


/**
 * @return freeText.totEnMet.date as string or DATE_IN_PAST
 */
function totEnMet($freeText, $dateFunction) {
	if ($dateFunction != DATE_IN_PAST) {
		return "$freeText tot en met $dateFunction";
	}
	return DATE_IN_PAST;
}

/**
 * @return date as string or DATE_IN_PAST
 */
function jan($year, $day1, $day2=0) {
	if (isDateInPast($year, 1, $day1, $day2)) {
		return DATE_IN_PAST;
	}
	$days = getDays($day1, $day2);
	return "$days januari";
}

function feb($year, $day1, $day2=0) {
	if (isDateInPast($year, 2, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days februari";
}

function mar($year, $day1, $day2=0) {
	if (isDateInPast($year, 3, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days maart";
}

function apr($year, $day1, $day2=0) {
	if (isDateInPast($year, 4, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days april";
}

function may($year, $day1, $day2=0) {
	if (isDateInPast($year, 5, $day1, $day2)) {
		return DATE_IN_PAST;
	}
	$days = getDays($day1, $day2);
	return "$days mei";
}

function jun($year, $day1, $day2=0) {
	if (isDateInPast($year, 6, $day1, $day2)) {
		return DATE_IN_PAST;
	}
	$days = getDays($day1, $day2);
	return "$days juni";
}

function jul($year, $day1, $day2=0) {
	if (isDateInPast($year, 7, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days juli";
}

function aug($year, $day1, $day2=0) {
	if (isDateInPast($year, 8, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days augustus";
}

function sep($year, $day1, $day2=0) {
	if (isDateInPast($year, 9, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days september";
}

function oct($year, $day1, $day2=0) {
	if (isDateInPast($year, 10, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days oktober";
}

function nov($year, $day1, $day2=0) {
	if (isDateInPast($year, 11, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days november";
}

function dec($year, $day1, $day2=0) {
	if (isDateInPast($year, 12, $day1, $day2)) {
		return DATE_IN_PAST;
	} 
	$days = getDays($day1, $day2);
	return "$days december";
}

/* Private funtions
 */

function isDateInPast($year, $month, $day1, $day2) {
	$day = max($day1, $day2);
	$now = getdate();

	if ($year < $now["year"]) {
// 		printf("<p>-y- past: [%s %s %s] now: [%s %s %s]\n",
// 			$year, $month, $day,
// 			$now["year"], $now["mon"], $now["mday"]
// 			);
		return true;
	}

	if ($year <= $now["year"] && $month < $now["mon"]) {
// 		printf("<p>-m- past: [%s %s %s] now: [%s %s %s]\n",
// 			$year, $month, $day,
// 			$now["year"], $now["mon"], $now["mday"]
// 			);
		return true;
	}

	if ($year <= $now["year"] && $month <= $now["mon"] && $day < $now["mday"]) {
// 		printf("<p>-d- past: [%s %s %s] now: [%s %s %s]\n",
// 	 		$year, $month, $day,
// 			$now["year"], $now["mon"], $now["mday"]
// 			);
		return true;
	}

// 	printf("<p>+++ future: [%s %s %s] now: [%s %s %s]\n",
// 		$year, $month, $day,
// 		$now["year"], $now["mon"], $now["mday"]
// 		);
	return false;
}

function getDays($day1, $day2) {
	$days = $day1;
	if ($day2 != 0) { $days = "$days en $day2"; }
	return $days;
}

?>