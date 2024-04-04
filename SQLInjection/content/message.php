<?php
include("connection.php");
// get
//  get all message from the database


// post
// add new message


if (isset($_POST["message"])) {

  $receiver_id = $_POST["receiver_id"];
  $sender = $_POST["sender"]; // only you and student

  $message = $_POST["message"];

  $sql = "INSERT INTO conversation (message, receiver_id, sent_by) VALUES ('$message', $receiver_id, '$sender')";

  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}

if (isset($_GET["receiver_id"])) {
  $receiver_id = $_GET["receiver_id"];
  $sql = "SELECT * FROM conversation INNER JOIN student ON conversation.receiver_id = student.id WHERE receiver_id = $receiver_id  ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["sent_by"] == "you") {
        echo "<div class='right'>";
        // echo "<span class='sender'> You </span>";
      } else {
        echo "<div class='left'>";
      };
      echo "<span class='message'>" . $row["message"] . "</span></div>";
      echo "</div>";
    };
  }
}
