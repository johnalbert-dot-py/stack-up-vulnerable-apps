<?php

include("connection.php");

if (isset($_POST["search"])) {
  $search = $_POST["search"];
  $sql = "SELECT id, first_name, last_name, student_no FROM student WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR CONCAT(first_name, ' ', last_name) LIKE '%$search%'";
} else {
  $sql = "SELECT id, first_name, last_name, student_no FROM student";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div onClick=\"startConvo(this)\" data-student-no=\"" . $row["student_no"] . "\" data-name=\"" . $row["first_name"] . " " . $row["last_name"] . "\" id=\"" . $row["id"] . "\">" . $row["first_name"] . " " . $row["last_name"] . "</div>";
  }
} else {
  echo "0 results";
}
