<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>@yield("title", "no microtears")</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
        @livewireStyles
    </head>

    <body class="flex min-h-screen flex-col bg-white text-black">
        <x-navbar />

        <main class="px-15 flex flex-grow items-center">
            @yield("content")
        </main>

        <livewire:auth.login-modal />
        @livewireScripts
    </body>
</html>
