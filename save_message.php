<?php
include 'database.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->senderName) && isset($data->messageText)) {
    $sender = $conn->real_escape_string($data->senderName);
    $message = $conn->real_escape_string($data->messageText);

    $sql = "INSERT INTO messages (sender_name, message_text) VALUES ('$sender', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "ÈíÇäÇÊ ÛíÑ ßÇãáÉ"]);
}

$conn->close();
?>
