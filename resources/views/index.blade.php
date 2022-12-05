<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Fyiremate V5</title>
    <style>
        .vertical-center {
            transform: translate(-50%, -50%);
        }

        body {
            background-color: #f3f4f6;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='32' viewBox='0 0 16 32'%3E%3Cg fill='%23d1d5db' fill-opacity='0.4'%3E%3Cpath fill-rule='evenodd' d='M0 24h4v2H0v-2zm0 4h6v2H0v-2zm0-8h2v2H0v-2zM0 0h4v2H0V0zm0 4h2v2H0V4zm16 20h-6v2h6v-2zm0 4H8v2h8v-2zm0-8h-4v2h4v-2zm0-20h-6v2h6V0zm0 4h-4v2h4V4zm-2 12h2v2h-2v-2zm0-8h2v2h-2V8zM2 8h10v2H2V8zm0 8h10v2H2v-2zm-2-4h14v2H0v-2zm4-8h6v2H4V4zm0 16h6v2H4v-2zM6 0h2v2H6V0zm0 24h2v2H6v-2z'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body>

<main class="w-96 vertical-center absolute top-1/2 left-1/2 shadow rounded py-5 bg-white">
    <header class="px-5">
        <h2 class="font-daysone font-semibold text-2xl text-center border-b pb-5">
            <span class="text-orange-500">FYIRE</span><span class="text-blue-900">MATE</span>
        </h2>
    </header>

    <section class="font-opensans text-slate-700 p-5">
        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf

            <section class="space-y-2 relative">
                <label for="username" class="text-sm font-semibold">Username</label>

                <input type="text"
                       id="username"
                       name="username"
                       class="input-field @error('username') bg-red-200 border-red-300
                @enderror"
                       placeholder="Username"
                       required
                >

                @error('username')
                <p class="text-xs text-red-500 absolute font-opensans top-16 pt-0.5">{{ $message }}</p>
                @enderror
            </section>

            <section class="space-y-2 relative">
                <label for="password" class="text-sm font-semibold">Password</label>

                <input type="password"
                       id="password"
                       name="password"
                       class="input-field @error('password') bg-red-200 border-red-300
                @enderror"
                       placeholder="•••••••••"
                       required
                >

                @error('password')
                <p class="text-xs text-red-500 absolute font-opensans top-16 pt-0.5">{{ $message }}</p>
                @enderror
            </section>

            <section class="flex -mt-3 mb-6 space-x-2 items-center">
                <input
                    type="checkbox"
                    id="default-input"
                    name="remember"
                    class="cursor-pointer"
                    value="1"
                >

                <label
                    for="remember"
                    class="block font-opensans mb-2 text-xs text-gray-700 mt-1.5"
                >
                    <span class="border-b border-slate-400">Remember me</span>
                </label>
            </section>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4
                 focus:ring-blue-300 rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full font-bold">SIGN IN</button>
        </form>
    </section>
</main>

</body>
</html>
