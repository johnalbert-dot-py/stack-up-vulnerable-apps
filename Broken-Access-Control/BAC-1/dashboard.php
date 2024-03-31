<?php 


if ($_COOKIE['logged_in'] != "1") {
  header('Location: /');
} else {
  if (!isset($_COOKIE['user'])) {
    setcookie('user', "admin", 0, "/dashboard.php", "localhost", true, true);
    header('Location: /dashboard.php');
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style type="text/css">

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      font-size: 100%;
    }

    body {
      font-family: "Consolas", sans-serif;
      font-size: 1.6rem;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #FFEDE0;
    }

    section {
      background-color: #fff;
      padding: 28px;
      border-radius: 4px;
      border: 1px solid #000;
      box-shadow: -7px 10px 0px rgba(0, 0, 0, 1);
      width: 60vw;
    }
  </style>
</head>
<body>
  <main>
    <h1 style="margin-block: 20px; text-align: center">
      Welcome to Dashboard
    </h1>
    <section style="width: 100%">
      Congratulations! You are logged in as <?= $_COOKIE["user"] ?>.
    </section>
  </main>
</body>
</html>
