<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Viene caricato il JS ed anche il file app.scss --}}
    @vite('resources/js/app.js') 
</head>

<body class="bg-primary">
    <h1 class="text-center text-danger py-5">MOVIES</h1>

    
    @yield('content')

</body>