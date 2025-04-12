<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <style>
    body {
      margin: 0;
    }

    .main {
      min-height: 100vh;
      font-family: system-ui;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <div class="main">
    <h2>HOME PAGE</h2>
    <p>Available for non authenticated users</p>
    <p>go to the protected route <a href="/dashboard">dashboard</a></p>
  </div>
</body>

</html>