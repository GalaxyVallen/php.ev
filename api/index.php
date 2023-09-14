<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Vercel php</title>
  <script>
    tailwind.config = {
      darkMode: 'class',
    }
  </script>
</head>
<body class="flex flex-col justify-center items-center bg-white dark:bg-black min-h-screen">
  <h1 class="text-3xl md:text-6xl tracking-wide font-bold dark:text-white cursor-default dark:selection:bg-white dark:selection:text-black">
      Vercel-php
  </h1>
  <a href="sec.php" class="font-semibold text-gray-500 dark:text-gray-400 hover:underline mt-6">2nd page</a>
  <a href="/me" class="font-semibold text-gray-300 dark:text-gray-600 -mt-1 line-through">/second</a>
</body>
</html>