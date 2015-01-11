<?php
$query = strtolower($_GET['q']);

// Load the birds.txt file and search for the query
$birds_string = file_get_contents('birds.txt');

// Turn the string into an array
$birds = explode("\n", $birds_string);

$matched_results = [];

for($i = 0, $count = count($birds); $i < $count; $i++) {
    $bird = $birds[$i];
    // Check if the bird string is empty. If it is, skip it
    if(!empty($bird)) {
        // If the query exists from the beginning of the string, put that string into the $matched_results array
        if(strpos(strtolower($bird), $query) === 0) {
            $matched_results[] = $bird;
        }
    }
}

// Output this into a JSON format so that we can work with it in JS
echo json_encode($matched_results);
?>