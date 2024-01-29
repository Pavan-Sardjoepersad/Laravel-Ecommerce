<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>



</head>
<body>
    
    {{-- Here, the content will be rendered --}}
    @yield('content')
    {{-- {{$slot}} --}}

</body>
</html>