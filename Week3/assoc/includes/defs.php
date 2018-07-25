<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $query from form. */
function search($query) {
    global $pms; 

    // Filter $pms by $query
    if (!empty($query)) {
		$results = array();
		foreach ($pms as $pm) {
			if (stripos($pm['name'],	$query) !== FALSE ||
				strpos($pm['from'], 	$query) !== FALSE || 
				strpos($pm['to'], 		$query) !== FALSE ||
				stripos($pm['state'], 	$query) !== FALSE) {
			$results[] = $pm;
			}
		}
    }
	return($results);
}
?>
