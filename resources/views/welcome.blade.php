<!DOCTYPE html>
<html>
    <head>
        <title>Kargaroo</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            
            .white {
                color: #FFF;
            }
            
            h1 {
                font-family: 'Helvetica';
                font-size: .5em;
                font-style: normal;
                font-variant: normal;
                font-weight: bold;
                line-height: 1em;
                margin: 0 0;
            }
            
            h3 {
                font-family: 'Helvetica', Helvetica, Arial, sans-serif;
                font-size: .2em;
                font-style: normal;
                font-variant: normal;
                font-weight: 700;
                line-height: 1em;
                margin: .3em 0;
            }
            
            .bold {
                font-weight: bold;
            }
            
            .bg-red {
                background-color: rgb(191, 1, 30);
            }
            
            .underlined {
                text-decoration: underline;
            }
            
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 12em;
            }
            .title hr {
                display: block;
                height: 1px;
                border: 0;
                border-top: 2px solid #000;
                margin: 0 0;
                padding: 0;
                clear: both;
            }
            
            .kargaroo-logo {
                width: .5em;
            }
            
            .squared {
                width: .5em;
                height: .5em;
                overflow: hidden;
            }
            
            .wrapper * {
                float: left;
            }
            
            .button {
                border: 2px #FFF solid;
                color: #FFF;
                font-size: 1em;
                margin: 0 0; 
                font-family: 'Helvetica', Helvetica, Arial, sans-serif;
                font-style: normal;
                font-variant: normal;
                line-height: .2em;
                padding: 20px 30px;
                text-decoration: none;
                text-transform: uppercase;
                margin-top: 60px;
                position: relative;
                transition: all .2s ease-in-out;
            }
            .button:hover {
                background-color: #FFF;
                color: rgb(191, 1, 30);
            }
        </style>
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
