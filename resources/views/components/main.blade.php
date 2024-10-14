<div>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$title}}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/75b12c4b2e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <x-nav />
        <div></div>
        <main>
            {{ $slot }}
        </main>
    </body>
    </html>
</div>