<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ ('/css/fournisseur/create.css') }}"/>
    <link rel="stylesheet" href="{{ ('/css/fournisseur/index.css') }}"/>
    <link rel="stylesheet" href="{{ ('/css/menu.css') }}"/>
    <title>Document</title>
</head>
<body>
    <header>
        @yield('content1')
        <!--h1>Header</h1-->
    </header>
    <main>
        @yield('content') 
    </main>
    <footer>
        @yield('content2') 
        <!--h1>Footer</h1-->
    </footer>
</body>
</html>