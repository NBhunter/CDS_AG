<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('img/logo_ag.ico')}}" />
        <title>đăng nhập</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    #home:hover{
color: #fff;
    }

    .input-icon {
    position: relative;
 }

.input-icon input {
   padding-right: 4rem;
}

.input-icon span {
    position: absolute;
    top: 50%;
    right: 5%;
    transform: translateY(-50%);
    color: #17255a;
    cursor: pointer;
}
    </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased" style="font-family: Roboto;">
            {{ $slot }}
        </div>
    </body>
</html>
