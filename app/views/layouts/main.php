<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <link rel="stylesheet" href="/css/tailwind.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 p-5 bg-blue-200">
  <nav class="m-3 p-3 flex flex-row justify-between text-yellow-400 text-2xl font-bold underline">
    <div>
      <a href="/">Home</a>
    </div>
    <div>
      <ul class="flex flex-row justify-around">
        <li class="mx-2">
          <a href="/auth/login/">Login</a>
        </li>
        <li class="mx-2">
          <a href="/auth/register/">Register</a>
        </li>
      </ul>
  </nav>
  {{content}}
</body>

</html>