<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <link rel="stylesheet" href="/css/tailwind.css" />
</head>
<body class="bg-blue-200">
  <nav class="flex flex-row justify-between m-0 p-5 text-orange-500 font-bold underline">
    <div>
      <a href="/">Home</a>
    </div>
    <div >
      <ul class="flex flex-row justify-between">
        <li class="mx-2">
          <a href="/auth/login">Login</a>
        </li>

        <li class="mx-2">
          <a href="/auth/register">Register</a>
        </li>
      </ul>
    </div>
  </nav>
  {{content}}
</body>
</html>