<x-layout>
    @include('_header')
    @include('_side-nav')

    <x-sub-header>
        SYSTEM LOCATION
    </x-sub-header>

    <x-containers.main>
        <section class="font-opensans text-slate-700 bg-white rounded shadow w-1/2 mx-auto">
            <div class="border-b text-center">
                <h2 class="font-bold p-2">SET LOCATION</h2>
            </div>

            <div class="px-10 pb-10 pt-5">
                <form action="" class="space-y-5">
                    @csrf

                    <section class="grid grid-cols-6">
                        <div class="col-span-3 space-y-10">
                            <label for="region" class="block">Regions</label>
                            <label for="region" class="block">Provinces</label>
                            <label for="region" class="block">Cities</label>
                            <label for="region" class="block">Postal Code</label>
                        </div>

                        <div class="col-span-3 space-y-6">
                            <div>
                                <button
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 items-center dark:bg-blue-600 dark:hover:bg-blue-700
                                dark:focus:ring-blue-800 w-52 flex justify-between"
                                    type="button"
                                >
                                    <span>Select Region</span>

                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>

                                <div
                                    class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                    style="display: none"
                                >
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <button
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 items-center dark:bg-blue-600 dark:hover:bg-blue-700
                                dark:focus:ring-blue-800 w-52 flex justify-between"
                                    type="button"
                                >
                                    <span>Select Province</span>

                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>

                                <div
                                    class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                    style="display: none"
                                >
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <button
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 items-center dark:bg-blue-600 dark:hover:bg-blue-700
                                dark:focus:ring-blue-800 w-52 flex justify-between"
                                    type="button"
                                >
                                    <span>Select City</span>

                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>

                                <div
                                    class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                    style="display: none"
                                >
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <input type="number" class="input-field w-52">
                            </div>
                        </div>
                    </section>

                </form>
            </div>
        </section>
    </x-containers.main>
</x-layout>
