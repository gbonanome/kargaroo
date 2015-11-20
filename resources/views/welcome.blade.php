<!DOCTYPE html>
<html>
    <head>
        <title>Kargaroo</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="bg-red">
        <div class="container">
            <div class="content">
                <div class="title" style="margin-bottom: 60px;">
                    <div class="wrapper">
                        <div class="squared">
                            <img src="{{ URL::asset('images/logo.svg') }}" alt="Kargaroo" class="kargaroo-logo" />
                        </div>
                        <h1 class="white">Kargaroo</h1>
                    </div>
                    <hr />
                    <h3 class="white">Hop On, Hop Off</h3>
                </div>
                <a class="button" href="{{ URL::route('get-user') }}">Join the community</a>
            </div>
        </div>
    </body>
</html>
