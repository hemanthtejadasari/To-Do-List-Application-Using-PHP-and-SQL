<?php
// get_tasks.php
require_once 'db.php';

// Retrieve tasks from the database and display them as a list
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql);

// Check if there are any tasks
if ($result->num_rows > 0) {
    // Output each task as a list item
    while ($row = $result->fetch_assoc()) {
        echo '<li>' . $row['task'] . '</li>';
    }
} else {
    // Display a message if no tasks are found
    echo '<li>No tasks found.</li>';
}

// Close the database connection
$conn->close();
?>
