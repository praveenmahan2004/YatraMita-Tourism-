<?php
// Include the database connection file
include('includes/config.php');

// Define the SQL query to retrieve data from the "daytime" column
$sql = "SELECT DISTINCT daytime FROM your_table_name";

try {
    // Prepare the SQL statement
    $query = $dbh->prepare($sql);

    // Execute the query
    $query->execute();

    // Fetch all the results
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // Convert the results to JSON format
    $jsonOptions = json_encode($results);

    // Output the JSON data
    echo $jsonOptions;
} catch (PDOException $e) {
    // Handle any errors that occur during the execution of the query
    echo "Error: " . $e->getMessage();
}
?>
