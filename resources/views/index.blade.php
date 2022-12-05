<x-layout>

    <main class="w-96 vertical-center absolute top-1/2 left-1/2 shadow rounded py-5 bg-white">
        <header class="px-5">
            <h2 class="font-daysone font-semibold text-2xl text-center border-b pb-5">
                <span class="text-orange-500">FYIRE</span><span class="text-blue-900">MATE</span>
            </h2>
        </header>

        <section class="font-opensans text-slate-700 p-5">
            <form action="" class="space-y-5">
                @csrf

                <section class="space-y-2">
                    <label for="username" class="text-sm font-semibold">Username</label>

                    <input type="text"
                           id="username"
                           name="username"
                           class="input-field"
                           placeholder="Username"
                           required
                    >
                </section>

                <section class="space-y-2">
                    <label for="password" class="text-sm font-semibold">Password</label>

                    <input type="text"
                           id="password"
                           name="password"
                           class="input-field"
                           placeholder="•••••••••"
                           required
                    >
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

                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4
                 focus:ring-blue-300 rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full font-bold">SIGN IN</button>
            </form>
        </section>
    </main>

</x-layout>
