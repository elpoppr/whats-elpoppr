<?php
include 'database.php';

$sql = "SELECT sender_name, message_text, timestamp FROM messages ORDER BY timestamp DESC";
$result = $conn->query($sql);

$messages = [];
while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);
$conn->close();
?>
