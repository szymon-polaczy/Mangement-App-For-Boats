<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard - Management App For Boats</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center gap-20 h-screen w-screen bg-stone-800 text-teal-400">
    <main class="flex items-center flex-col justify-center gap-4">
        <h1 class="text-2xl text-center">Dashboard</h1>
        <a href="{{ route('logout') }}" class="bg-stone-600 w-60 text-center mx-auto px-4 py-1 rounded-md">Log out</a>
    </main>
</body>

</html>
