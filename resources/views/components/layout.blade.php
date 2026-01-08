<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>

    <link href="https://fonts.lug.ustc.edu.cn/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="bg-black/95 text-white font-hanken-grotesk pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-wihte/10">
            <div>
                <a href="/" class="shrink-0"><img src="https://cdn.jsdelivr.net/gh/laravel/art/laravel-logo.svg"
                        alt="" class="size-8"></a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button>Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
