<!DOCTYPE html>
<html lang="fa_IR" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('css/font/font.css')}}">
    @stack('head')
</head>
<body style="font-family: irs" class="select-none text-gray-800">

@stack('before-content')

@yield('content')

@stack('after-content')

@stack('footer')

</body>
</html>
