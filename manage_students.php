<?php
session_start();
require_once('db_connect.php');

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Handle CRUD operations for students (e.g., add, edit, delete)
// Example functions:
function addStudent($name, $email, $phone) {
    global $conn;
    $sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editStudent($id, $name, $email, $phone) {
    global $conn;
    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Student updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

function deleteStudent($id) {
    global $conn;
    $sql = "DELETE FROM students WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
