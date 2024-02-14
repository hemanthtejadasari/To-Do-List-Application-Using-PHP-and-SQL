<?php
// add_task.php
require_once 'db.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $task = $_POST['task'];

    // Insert the new task into the database
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page
        header('Location: index.php');
    } else {
        // Display an error message if the insertion fails
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}

// Close the database connection
$conn->close();
