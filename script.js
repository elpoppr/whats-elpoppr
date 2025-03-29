document.addEventListener("DOMContentLoaded", fetchMessagesFromDatabase);

const messageInput = document.getElementById("messageInput");
const messages = document.getElementById("messages");
const sendMessageButton = document.getElementById("sendMessage");

sendMessageButton.addEventListener('click', () => {
    const messageText = messageInput.value.trim();
    if (messageText === '') return;

    sendMessageToDatabase(messageText, "„” Œœ„ „ÃÂÊ·");
    messageInput.value = '';
});

function sendMessageToDatabase(message, sender) {
    fetch("save_message.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            senderName: sender,
            messageText: message
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            fetchMessagesFromDatabase();
        } else {
            console.error("Œÿ√ ›Ì ≈—”«· «·—”«·…:", data.message);
        }
    })
    .catch(error => console.error("Œÿ√ ›Ì «·« ’«·:", error));
}

function fetchMessagesFromDatabase() {
    fetch("get_messages.php")
    .then(response => response.json())
    .then(messages => {
        document.getElementById("messages").innerHTML = "";
        messages.forEach(msg => {
            const messageElement = document.createElement("div");
            messageElement.textContent = `${msg.sender_name}: ${msg.message_text}`;
            document.getElementById("messages").appendChild(messageElement);
        });
    })
    .catch(error => console.error("Œÿ√ ›Ì Ã·» «·—”«∆·:", error));
}
