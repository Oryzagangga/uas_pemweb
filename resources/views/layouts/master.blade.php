<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @yield('styles')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        /*------------------------------------
        - COLOR primary
        ------------------------------------*/
        .alert-primary {
            color: #845500;
            background-color: #ffedcc;
            border-color: #ffe5b7;
        }

        .alert-primary hr {
            border-top-color: #ffdc9e;
        }

        .alert-primary .alert-link {
            color: #513400;
        }

        .badge-primary {
            color: #212529;
            background-color: #FFA500;
        }

        .badge-primary[href]:hover, .badge-primary[href]:focus {
            color: #212529;
            background-color: #cc8400;
        }

        .bg-primary {
            background-color: #FFA500 !important;
        }

        a.bg-primary:hover, a.bg-primary:focus,
        button.bg-primary:hover,
        button.bg-primary:focus {
            background-color: #cc8400 !important;
        }

        .border-primary {
            border-color: #FFA500 !important;
        }

        .btn-primary {
            color: #212529;
            background-color: #FFA500;
            border-color: #FFA500;
        }

        .btn-primary:hover {
            color: #212529;
            background-color: #db8d00;
            border-color: #cc8400;
        }

        .btn-primary:focus, .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.5);
        }

        .btn-primary.disabled, .btn-primary:disabled {
            color: #212529;
            background-color: #FFA500;
            border-color: #FFA500;
        }

        .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
            color: #212529;
            background-color: #cc8400;
            border-color: #bc7a00;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.5);
        }

        .btn-outline-primary {
            color: #FFA500;
            background-color: transparent;
            border-color: #FFA500;
        }

        .btn-outline-primary:hover {
            color: #212529;
            background-color: #FFA500;
            border-color: #FFA500;
        }

        .btn-outline-primary:focus, .btn-outline-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.5);
        }

        .btn-outline-primary.disabled, .btn-outline-primary:disabled {
            color: #FFA500;
            background-color: transparent;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
            color: #212529;
            background-color: #FFA500;
            border-color: #FFA500;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.5);
        }

        .list-group-item-primary {
            color: #845500;
            background-color: #ffe5b7;
        }

        .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
            color: #845500;
            background-color: #ffdc9e;
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #212529;
            background-color: #845500;
            border-color: #845500;
        }

        .table-primary,
        .table-primary > th,
        .table-primary > td {
            background-color: #ffe5b7;
        }

        .table-hover .table-primary:hover {
            background-color: #ffdc9e;
        }

        .table-hover .table-primary:hover > td,
        .table-hover .table-primary:hover > th {
            background-color: #ffdc9e;
        }

        .text-primary {
            color: #FFA500 !important;
        }

        a.text-primary:hover, a.text-primary:focus {
            color: #cc8400 !important;
        }
    </style>
</head>
<body>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
