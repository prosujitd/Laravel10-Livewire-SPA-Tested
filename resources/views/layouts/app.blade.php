<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Liveddwire 10</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    Frontend
    <a href="/about">About</a> 
    <a href="/contact">Contact</a>
    <a href="/dashboard">Dashboard</a>

    {{$slot}}

@livewireScripts
<!-- <script src="https://cdn.jsdeliver.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script> -->


</body>
</html>