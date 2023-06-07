<?php
  // Get the search term from the query string parameter 'q'
  $searchTerm = $_GET['q'];

  // Connect to the SQLite database
  $db = new SQLite3('database.db');

  // Construct the SQL query
  $query = "SELECT * FROM products WHERE name LIKE '%$searchTerm%'";

  // Execute the query
  $result = $db->query($query);

  // Display the results
  while ($row = $result->fetchArray()) {
    echo $row['name'] . '<br>';
  }
?>
