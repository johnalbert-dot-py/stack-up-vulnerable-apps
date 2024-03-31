<?php 

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
        setcookie('logged_in', "1");
        header('Location: dashboard.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
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

    form {
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    form div {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    label {
      font-size: 1.4rem;
    }

    input {
      border: 1px solid #000;
      padding: 12px;
      font-size: 1rem;
    }

    button {
      padding: 12px;
      font-size: 1.4rem;
      border: 2px solid black;
      background: rgb(14,0,255);
      background: linear-gradient(90deg, rgba(14,0,255,1) 0%, rgba(120,0,255,1) 100%);
      cursor: pointer;
      color: #fff;
    }
  </style>
</head>
<body>
  <main>
    <h1 style="margin-block: 20px">
      Log In
    </h1>
    <section>
      <form action="" method="post" autocomplete="off">
        <div>
          <label for="username">Username</label>
          <input type="text" placeholder="albertdotpy" name="username" id="username" required>
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" placeholder="s0m3th1nG-sTr0nG-123" name="password" id="password" required>
        </div>
        <button type="submit" name="submit">Log In</button>
      </form>
    </section>
  </main>
</body>
</html>
