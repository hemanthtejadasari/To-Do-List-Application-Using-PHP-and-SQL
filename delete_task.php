<?php
// delete_task.php
require_once 'db.php';

// Check if the form has been submitted and the ID of the task to delete is set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Delete the task from the database
    $sql = "DELETE FROM tasks WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        // Display a success message if the deletion is successful
        echo 'Task deleted successfully.';
    } else {
        // Display an error message if the deletion fails
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
