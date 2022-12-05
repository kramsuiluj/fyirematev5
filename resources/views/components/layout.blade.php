<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ resource_path('js/jquery-ui-1.13.2/jquery-ui.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Fyiremate V5</title>
    <style>
        #sub-header {
            transition: margin-left .5s;
        }

        #main-container, #actions {
            transition: margin-left .5s;
        }

        body {
            background-color: #f3f4f6;
            background-image: url("data:image/svg+xml,%3Csvg width='6' height='6' viewBox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%236b7280' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-gray-200">
    {{ $slot }}

    <script>
        const dropdownContainer = document.getElementById('dropdown-container');
        const options = document.getElementById('options');
        const optionItems = document.getElementById('option-items');
        const toggle = document.getElementById('toggle');
        const openIcon = document.getElementById('open');
        const closeIcon = document.getElementById('close');
        const sideNav = document.getElementById('side-nav');
        const mainContainer = document.getElementById('main-container');
        const subHeader = document.getElementById('sub-header');
        const actions = document.getElementById('actions');
        // const searching = document.getElementById('searching');
        // const searchItems = document.getElementById('search-items');
        // const searches = document.getElementById('searches');
        // const establishment = document.getElementById('establishment');
        // const owner = document.getElementById('owner');
        // const date = document.getElementById('date');
        // const selectedSearch = document.getElementById('selected-search');
        const personnel = document.getElementById('personnel');
        const personnelCategories = document.getElementById('personnel-categories');
        const reports = document.getElementById('reports');
        const reportCategories = document.getElementById('report-categories');

        toggle.addEventListener('click', () => {
            if (openIcon.style.display === 'none') {
                openIcon.style.display = 'block';
                closeIcon.style.display = 'none';
                mainContainer.classList.add('ml-52');
                subHeader.classList.add('ml-52');
                sideNav.style.width = '13rem';
                actions.classList.add('ml-52');
            } else {
                openIcon.style.display = 'none';
                closeIcon.style.display = 'block';
                mainContainer.classList.remove('ml-52');
                subHeader.classList.remove('ml-52');
                sideNav.style.width = '0';
                actions.classList.remove('ml-52');
            }
        });

        document.addEventListener('click', (event) => {
            if (!dropdownContainer.contains(event.target)) {
                optionItems.style.display = 'none';
            }

            // if (!searches.contains(event.target)) {
            //     searchItems.style.display = 'none';
            // }
        });

        options.addEventListener('click', () => {
            if (optionItems.style.display === 'none') {
                optionItems.style.display = 'block';
            } else {
                optionItems.style.display = 'none';
            }
        });

        // searching.addEventListener('click', () => {
        //     if (searchItems.style.display === 'none') {
        //         searchItems.style.display = 'block'
        //     } else {
        //         searchItems.style.display = 'none';
        //     }
        // });

        // establishment.addEventListener('click', () => {
        //     selectedSearch.innerText = establishment.innerText;
        // });

        // owner.addEventListener('click', () => {
        //     selectedSearch.innerText = owner.innerText;
        // });
        //
        // date.addEventListener('click', () => {
        //     selectedSearch.innerText = date.innerText;
        // });

        personnel.addEventListener('click', function () {
            if (personnelCategories.style.display === 'block') {
                personnelCategories.style.display = 'none';
            } else {
                personnelCategories.style.display = 'block';
            }
        });

        reports.addEventListener('click', function () {
           if (reportCategories.style.display === 'block') {
               reportCategories.style.display = 'none';
           } else {
               reportCategories.style.display = 'block';
           }
        });
    </script>
</body>
</html>
