<?php

//----------search button----------//

// Get the search query from the URL parameter
$searchQuery = $_GET['q'];
// Perform search logic (this is a basic example)
$searchResults = array(
    "Result 1 for $searchQuery",
    "Result 2 for $searchQuery",
    "Result 3 for $searchQuery"
);
// Output search results
foreach ($searchResults as $result) {
    echo "<p>$result</p>";
}













?>
