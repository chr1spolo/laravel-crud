<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
            <title> @yield('Title') </title>
            @yield('customCss')
        </head>
        <body>
            
            <div class="container">
                @yield('Content')
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
            @yield('customJs')
        </body>

    </html>