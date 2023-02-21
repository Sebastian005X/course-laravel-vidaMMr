<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My tasks</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header class="bg-sky-600 mb-5 text-white p-3">
    <div class="w-5/6 mx-auto flex justify-between items-center">
      <a href="#" class="font-bold text-xl">NAV</a>
      <nav>
        <ul class="flex justify-between">
          <li><a href="#" class="ml-4 hover:bg-sky-700 py-2 px-1">Tasks</a></li>
          <li><a href="#" class="ml-4 hover:bg-sky-700 py-2 px-1">Categories</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="w-5/6 mx-auto">
    @yield('content')
  </div>
</body>

</html>