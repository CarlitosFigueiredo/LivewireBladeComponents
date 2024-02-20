<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="max-w-2xl m-auto py-16">
            <div class="grid gap-4">
                <h2 class="text-5xl font-bold">Sepparator</h2>

                <div aria-orientation="horinzontal" role="separator" class="bg-gray-400 h-[1px] w-full"></div>
            </div>
            <div class="flex gap-4">
                <div>Home</div>

                <div aria-orientation="vertical" role="separator" class="bg-gray-400 h-full w-[1px]"></div>

                <div>About</div>

                <div aria-orientation="vertical" role="separator" class="bg-gray-400 h-full w-[1px]"></div>

                <div>Team</div>
            </div>
        </div>
    </body>
</html>
