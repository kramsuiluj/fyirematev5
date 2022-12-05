<aside id="side-nav" style="transition: 0.5s; overflow-x: hidden" class="font-opensans bg-white fixed w-52 h-screen text-slate-700 border-r border-gray-300">
    <ul class="mt-1 grid justify-center text-sm">
        <li>
            <a href="{{ route('administrators.dashboard') }}" class="flex items-center space-x-3 px-3 py-3
            cursor-pointer
            border-b hover:rounded
            hover:bg-gray-200
            {{ request()->routeIs('administrators.dashboard') ? 'bg-gray-300 rounded' : '' }}" style="font-weight: {{ request()->routeIs('administrators.dashboard') ? '600' : '500' }}">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>

                <span>Dashboard</span>
            </a>
        </li>

        <li
            class="flex items-center space-x-3 px-3 py-3 cursor-pointer border-b hover:rounded hover:bg-gray-200"
            style="font-weight: 500"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>

            <span>Establishments</span>
        </li>

        <li class="w-44" style="font-weight: 500">
            <div id="personnel" class="flex items-center px-3 py-3 cursor-pointer border-b hover:rounded
            hover:bg-gray-200">
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>

                    <span>Personnel</span>
                </div>

                <div class="ml-auto">
                    <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            <ul id="personnel-categories" class="flex flex-col items-center border-b bg-gray-100" style="font-weight:
            300; display: none;">
                <li
                    class="py-1 w-full flex items-center space-x-3 cursor-pointer border-b border-slate-700
                    hover:bg-gray-200">
                    <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>

                    <span>Chief, FSES</span>
                </li>

                <li class="py-1 w-full flex items-center space-x-3 cursor-pointer border-b border-slate-700
                hover:bg-gray-200">
                    <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>

                    <span>Muni/City Marshal</span>
                </li>

                <li class="py-1 w-full flex items-center space-x-3 cursor-pointer hover:bg-gray-200">
                    <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>

                    <span>Inspectors</span>
                </li>
            </ul>
        </li>

        <li class="flex items-center space-x-3 px-3 py-3 cursor-pointer border-b hover:rounded hover:bg-gray-200"
            style="font-weight: 500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>

            <span>Users</span>
        </li>

        <li class="flex items-center space-x-3 px-3 py-3 cursor-pointer border-b hover:rounded hover:bg-gray-200"
            style="font-weight: 500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="1.5"
                                                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>

            <span>Fixed Fields</span>
        </li>

        <li class="flex items-center space-x-3 px-3 py-3 cursor-pointer border-b hover:rounded hover:bg-gray-200"
            style="font-weight: 500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="1.5"
                                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>

            <span>Locations</span>
        </li>

        <li class="flex items-center space-x-3 px-3 py-3 cursor-pointer border-b hover:rounded hover:bg-gray-200"
            style="font-weight: 500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>

            <span>Action Logs</span>
        </li>

        <li class="" style="font-weight: 500">
            <div id="reports" class="flex items-center px-3 py-3 cursor-pointer border-b hover:rounded
            hover:bg-gray-200">
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>

                    <span>Reports</span>
                </div>

                <div class="ml-auto">
                    <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            <ul id="report-categories" class="flex flex-col items-center border-b bg-gray-100" style="font-weight:
            300; display: none;">
                <li
                    class="py-1 w-full flex items-center space-x-3 px-1 cursor-pointer border-b border-slate-700
                    hover:bg-gray-200">
                    <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>

                    <span>Monthly Report</span>
                </li>

                <li class="py-1 w-full flex items-center space-x-3 px-1 cursor-pointer border-b border-slate-700
                hover:bg-gray-200">
                    <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>

                    <span>Quarterly Report</span>
                </li>

                <li class="py-1 w-full flex items-center space-x-3 px-1 cursor-pointer hover:bg-gray-200">
                    <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>

                    <span>Annual Report</span>
                </li>
            </ul>
        </li>
    </ul>
</aside>
