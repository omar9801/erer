<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Laravel</title>


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        traines
        <a href="{{ url('/traines/add') }}">add traines</a>
            <a href="{{ url('/traines/edit') }}">edir traines</a>
                <a href="{{ url('/traines/delet') }}">delet traines</a>
    </body>
</html>