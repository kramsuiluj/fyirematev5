<x-layout>
    @include('_header')
    @include('_side-nav')

    <x-sub-header>
        DASHBOARD
    </x-sub-header>

    <x-containers.main>

        <div class="flex justify-between px-10">
            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white
                text-blue-500">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white
                text-green-500">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white
                text-yellow-500">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white
                text-red-500">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>

        <div class="flex gap-7">
            <div class="w-1/2 mt-10 p-5 bg-white rounded shadow">
                <canvas id="myChart"></canvas>
            </div>

            <div class="w-1/2 mt-10 p-5 bg-white rounded shadow">
                <canvas id="myChart2"></canvas>
            </div>
        </div>

    </x-containers.main>

    <script>
        window.onload = function () {
            const ctx = document.getElementById('myChart');
            const ctx2 = document.getElementById('myChart2');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            '#3B82F6',
                            '#22C55E',
                            '#6B7280',
                            '#EF4444'
                        ],
                        borderColor: [
                            '#3B82F6',
                            '#22C55E',
                            '#6B7280',
                            '#EF4444'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            '#3B82F6',
                            '#22C55E',
                            '#6B7280',
                            '#EF4444'
                        ],
                        borderColor: [
                            '#3B82F6',
                            '#22C55E',
                            '#6B7280',
                            '#EF4444'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        };
    </script>
</x-layout>
