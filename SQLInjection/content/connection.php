<?php

$conn = new mysqli("localhost", "root", "", "stackup_message_app");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}