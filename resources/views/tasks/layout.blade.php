<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Lara-List</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">Lara-List</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/tasks">Home</a></li>
            <li><a href="/tasks/create">Create New</a></li>
        </div>
    </nav>
    @yield('content')
</body>
</html>