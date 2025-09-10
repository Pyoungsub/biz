<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 px-4">
    <div class="text-center">
        <h1 class="text-8xl font-extrabold text-gray-800 dark:text-gray-100 mb-4 animate-pulse">404</h1>
        <p class="text-2xl text-gray-600 dark:text-gray-400 mb-6">Oops! The page you are looking for does not exist.</p>
        <a href="{{ url('/') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
            Go back home
        </a>
    </div>
</body>
</html>
