<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <base href="{{ asset('') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>

</head>

<body>
    @include('layouts/header')


    <!-- main-nav -->
    <div class="main-nav">
        <div class="container">
            <div class="row">
                <div class="main-nav-wrap">

                </div>
            </div>
        </div>
    </div>
    <!-- end main-nav -->
    </div>


    <!-- main -->
    <div class="container">
    @yield('NoiDung')
    </div>
    <!-- end main -->
    </div>
    <!-- end main body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('script')

    @include('layouts/footer')


</body>

</html>
