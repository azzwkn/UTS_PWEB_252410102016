<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Pawly</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5fafc;
            color: #3d5a71;
        }
    </style>
</head>
<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
